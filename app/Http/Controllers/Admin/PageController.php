<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use Session;
use Toastr;

use App\Traits\B64ImageSaver;

class PageController extends Controller
{
    use B64ImageSaver;
    
    public function __construct()
    {
        $this->middleware(['role:Super Admin'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('order', 'asc')->orderBy('updated_at', 'desc')->get();

        return view('admin.website.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::orderBy('order', 'asc')->orderBy('updated_at', 'desc')->get();

        return view('admin.website.pages.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $this->validate($request,[
            'page_title' => 'required|string',

        ]);

        if($request->content_type == 1)
        {
            $this->validate($request, [
                'details' => 'required'
            ]);
        }
        else
        {
            $this->validate($request, [
                'file_upload' => 'required'
            ]);
        }

        if($request->page_id)
        {
            $page = Page::find($request->page_id);
            $page->updated_by = Auth::id();
        }
        else
        {
            $page = new Page;
            $page->created_by = Auth::id();
        }

        $page->title = $request->page_title;

        $publish_datetime = date('Y-m-d H:i:s', strtotime($request->publish_date . ' ' . $request->publish_time));
        $page->publish_datetime = $publish_datetime;

        $page->order = $request->page_order;

        $page->content_type = $request->content_type;
        
        if ($request->content_type == 1) 
        {
            $page_details = $request->details;

            $page_details = $this->saveImage('uploads/page/',$request->details);

            $page->content =  $page_details;
        }
        else if($request->content_type == 2)
        {

            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $page->content = 'uploads/files/' . $content_new;
            }
        }
        
        if ($request->hasFile('featured_image')) 
        {
            $image = $request->featured_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $page->featured_image = '/uploads/images/' . $image_new;
        }


        $slug = preg_replace('/\s+/u', '-', trim($request->page_title));

        if(strlen($slug) == strlen(utf8_decode($slug)))
        {
          $slug = strtolower($slug);
        }
        // $slug = preg_replace('/\s+/u', '-', trim(strtolower($request->page_title)));
        
        if($page->slug != 'welcome')
            $page->slug = $slug;


        $page->save();

        Toastr::success('Successfully Created New Page!');


        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    public function viewData(Request $request)
    {
        $page = Page::find($request->id);
//            return json_encode($page);

        $vals = array(
            'title' => $page->title,
            'image' => $page->featured_image,
            'content' => $page->content
        );

        $vals = json_encode($vals);

        echo $vals;
        exit();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($page)
    {
        //
        $page = Page::find($page);

        return view('admin.website.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$page)
    {
        //

        $publish_date = \Carbon\Carbon::parse($request->page_date);

        $c_page = Page::find($page);
        
        $c_page->title = $request->page_title;
        if($c_page->slug != 'welcome')
        {
            // $slug = preg_replace('/\s+/u', '-', trim(strtolower($request->page_title)));

            $slug  = preg_replace('/\s+/u', '-', trim($request->page_title));

            if(strlen($slug) == strlen(utf8_decode($slug)))
            {
              $slug = strtolower($slug);
            }

            if($c_page->slug != $slug)
            {
                if(count(Page::where('slug', '=', $slug)->get())>0)
                {
                    $slug .= '-1';
                }
            }
            $c_page->slug           = $slug;
        }
        $c_page->parent_page_id     = $request->page_parent;
        $c_page->visibility         = $request->page_visibility;
        $c_page->publish_datetime   = $publish_date;

        // $c_page->content =  $page_details;


        if ($request->content_type == 1) 
        {
            $rp_string = "<?xml encoding='utf-8' ?>";
            $page_details = str_replace($rp_string, "", $request->page_details);
            $dom = new \DomDocument();
            // $dom->loadHtml($rp_string . $page_details);
            $dom->loadHtml( mb_convert_encoding($page_details, 'HTML-ENTITIES', "UTF-8"));

            $images = $dom->getElementsByTagName('img');


            foreach($images as $img)
            {
                $src = $img->getAttribute('src');                
                // if the img source is 'data-url'
                if(preg_match('/data:image/', $src)){                    
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];                    
                    // Generating a random filename
                    $filename = uniqid();
                    // $filepath = "/images/$filename.$mimetype";
                    $filepath = "uploads/page/".$filename . '.' . $mimetype;        
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));                    
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            }
            $page_details =  $dom->saveHTML();
            $c_page->content =  $page_details;

        }
        else if($request->content_type == 2)
        {

            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $c_page->content = 'uploads/files/' . $content_new;
            }
        }
        $c_page->content_type = $request->content_type;
        
        if ($request->hasFile('featured_image')) 
        {
            $image = $request->featured_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $c_page->featured_image = '/uploads/images/' . $image_new;
        }



        $c_page->save();

        Toastr::success('Successfully updated the Page!');


        return redirect()->route('pages.index');
    }

    public function toogleStatus(Request $request)
    {
        $page = Page::find($request->id);

        if($page->publish_status == 1 )
        {
            $page->publish_status = 0;

            $vals = array(
                'message' => 'Page Deativated');
        }
        else if($page->publish_status == 0)
        {
            $page->publish_status = 1;

            $vals = array(
                'message' => 'Page Activated');
        }

        $page->save();
        json_encode($vals);
        echo json_encode($vals);
        exit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($page)
    {
        //
        $c_page=Page::find($page);

        if($c_page->id == $welcome_settings->welcome_page_id)
        {
            Toastr::error('Welcome Page Can not be Deleted!');
            return redirect()->back();
        }
        else
        {
            $c_page->deleted_by = Auth::id();

            $c_page->save();

            $c_page->delete();

            Toastr::error('Successfully deleted the Page!');

            return redirect()->route('pages.index');

        }
    }
}
