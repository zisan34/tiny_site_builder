<?php

namespace App\Traits;

use Intervention\Image\ImageManagerStatic as Image;


trait B64ImageSaver
{
    protected $destination;
    protected $details;
    protected $returnData;

    public function saveImage($destination, $details)
    {

        $this->destination = $destination;
        $this->details = $details;

        $rp_string = "<?xml encoding='utf-8' ?>";
        $details = str_replace($rp_string, "", $this->details);
        $dom = new \DomDocument();
        // $dom->loadHtml($rp_string . $details);
        $dom->loadHtml( mb_convert_encoding($details, 'HTML-ENTITIES', "UTF-8"));

        $images = $dom->getElementsByTagName('img');

        foreach($images as $img)
        {
            $src = $img->getAttribute('src');
            $style = $img->getAttribute('style');
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];                    
                // Generating a random filename
                $file_uniqid = uniqid();
                $filename = $file_uniqid . '.' . $mimetype;

                // $public_path = public_path();
                // $filepath = str_replace('app_core/public', '', $public_path) . "uploads/drafts/images/".$filename;
                
                $filepath = $this->destination.$filename;
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  // ->resize(200, null)
                ->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));
                $new_src = \URL::asset($this->destination.$filename);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('style', "width:100%;");


            } // <!--endif
        }
        $this->returnData = $dom->saveHTML();

        return $this->returnData;
    }
}
