<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\ImageManagerStatic as Image;
use App\PostCategory;
use App\PostSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Session;
use Toastr;
use \Carbon\Carbon;
use URL;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('admin.website.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = PostCategory::where('parent_id', '=', NULL)->get();
        $subcategories = PostCategory::where('parent_id', '!=', NULL)->get();
        return view('admin.website.posts.create', compact('categories', 'subcategories'));
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
        //
        $this->validate($request,[
            'post_title' => 'required',
            'content_type' => 'required',
            'post_category' => 'required',
            'post_details' => 'nullable|string',
            'file_upload' => 'nullable|mimes:pdf|max:10000',
            'featured_image' => 'nullable|mimes:jpeg,bmp,png|max:2200'
        ]);
        
        $post = new Post;
        $post->title = $request->post_title;
        $post->content_type = $request->content_type;

        if(strpos($request->post_category,'|'))
        {
            $cat = explode('|',$request->post_category);
            $post->post_category_id = $cat[0];
            $post->post_sub_category_id = $cat[1];
        }
        else
        {
            $post->post_category_id = $request->post_category;
        }

        if ($request->content_type == 1) 
        {
            $details = $request->post_details;
            $dom = new \DomDocument();
            $rp_string = "<?xml encoding='utf-8' ?>";
            $dom->loadHtml($rp_string . $details);
            $details =  $dom->saveHTML();
            $post->content =  $details;
            //
            $rp_string = "<?xml encoding='utf-8' ?>";
            $post_details = str_replace($rp_string, "", $request->post_details);
            $dom = new \DomDocument();
            // $dom->loadHtml($rp_string . $post_details);
            $dom->loadHtml( mb_convert_encoding($post_details, 'HTML-ENTITIES', "UTF-8"));

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
                    $file_uniqid = uniqid();
                    $filename = $file_uniqid . '.' . $mimetype;

                    // $public_path = public_path();
                    // $filepath = str_replace('app_core/public', '', $public_path) . "uploads/drafts/images/".$filename;
                    
                    $filepath = "uploads/post/".$filename;
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));
                    $new_src = URL::asset('uploads/post/'.$filename);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            }

            // foreach($images as $img)
            // {
            //     $src = $img->getAttribute('src');                
            //     // if the img source is 'data-url'
            //     if(preg_match('/data:image/', $src)){                    
            //         // get the mimetype
            //         preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            //         $mimetype = $groups['mime'];                    
            //         // Generating a random filename
            //         $filename = uniqid();
            //         // $filepath = "/images/$filename.$mimetype";
            //         $filepath = "uploads/post/".$filename . '.' . $mimetype;
            //         // @see http://image.intervention.io/api/
            //         $image = Image::make($src)
            //           // resize if required
            //           /* ->resize(300, 200) */
            //           ->encode($mimetype, 100)  // encode file to the specified mimetype
            //           ->save(public_path($filepath));                    
            //         $new_src = URL::asset($filepath);
            //         $img->removeAttribute('src');
            //         $img->setAttribute('src', $new_src);
            //     } // 
            // }


            $post_details =  $dom->saveHTML();
            $post->content =  $post_details;
        }
        else if($request->content_type == 2)
        {
            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $post->content = 'files/' . $content_new;
            }
        }

        if ($request->hasFile('featured_image')) 
        {
            $image = $request->featured_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $post->featured_image = '/uploads/images/' . $image_new;
        }
        // $post->post_category_id = $request->post_category;
        // $post->post_sub_category_id = $request->post_sub_category;
        $post->created_by = Auth::id();
        // $post->content = $request->post_details;

        $publish_date = Carbon::parse($request->publish_date);
        $post->publish_datetime = $publish_date;
        $post->visibility = $request->post_visibility;
        $post->visibility_pass = $request->protected_pass;
        $post->template_id = $request->post_template;
        $post->order = $request->post_order;

        $slug = preg_replace('/\s+/u', '-', trim($request->post_title));

        if(strlen($slug) == strlen(utf8_decode($slug)))
        {
          $slug = strtolower($slug);
        }
        // $slug = preg_replace('/\s+/u', '-', trim(strtolower($request->post_title)));
        if(count(Post::where('slug', '=', $slug)->get())>0)
        {
            $slug .= '-1';
        }
        $post->slug = $slug;

        if($request->post_template == 1)
        {
            $post->subtitle = $request->subtitle;
        }
        $post->created_by = Auth::id();
        $post->save();

        $category = $post->post_category;
        $category->updated_at = now();
        $category->save();

        Toastr::success('Successfully Created New Post');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function viewData(Request $request)
    {
        $post = Post::find($request->id);

        $vals = array(
            'title' => $post->title,
            'category' => $post->post_category->title,
            'image' => $post->featured_image,
            'content' => $post->content
        );

        $vals = json_encode($vals);

        echo $vals;
        exit();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        $categories = PostCategory::all();

        return view('admin.website.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'content_type' => 'required',
            'post_category' => 'required',
            'post_details' => 'nullable|string',
            'file_upload' => 'nullable|mimes:pdf|max:10000',
        ]);
        // return $post_details;
        $post = Post::find($id);
        $post->title = $request->post_title;
        $post->content_type = $request->content_type;

        if(strpos($request->post_category,'|'))
        {
            $cat = explode('|',$request->post_category);
            $post->post_category_id = $cat[0];
            $post->post_sub_category_id = $cat[1];

        }
        else
        {
            $post->post_category_id = $request->post_category;
            $post->post_sub_category_id = NULL;

            
        }

        if ($request->content_type == 1) 
        {
            //
            $rp_string = "<?xml encoding='utf-8' ?>";
            $post_details = str_replace($rp_string, "", $request->post_details);
            $dom = new \DomDocument();
            // $dom->loadHtml($rp_string . $post_details);
            $dom->loadHtml( mb_convert_encoding($post_details, 'HTML-ENTITIES', "UTF-8"));

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
                    $filepath = "uploads/post/".$filename . '.' . $mimetype;

                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));                    
                    $new_src = URL::asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            }
            $post_details =  $dom->saveHTML();
            $post->content =  $post_details;
        }
        else if($request->content_type == 2)
        {
            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $post->content = 'files/' . $content_new;
            }
        }

        
        if ($request->hasFile('featured_image')) 
        {
            $image = $request->featured_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $post->featured_image = '/uploads/images/' . $image_new;
        }

        $slug  = preg_replace('/\s+/u', '-', trim($request->post_title));
        if(strlen($slug) == strlen(utf8_decode($slug)))
        {
          $slug = strtolower($slug);
        }
        if($post->slug != $slug)
        {
            if(count(Post::where('slug', '=', $slug)->get())>0)
            {
                $slug .= '-1';
            }
        }
        $post->slug = $slug;
        $publish_date = Carbon::parse($request->publish_date);
        $post->publish_datetime = $publish_date;
        $post->visibility = $request->post_visibility;
        $post->visibility_pass = $request->protected_pass;
        $post->template_id = $request->post_template;
        $post->order = $request->post_order;
        if($request->post_template == 1)
        {
            $post->subtitle = $request->subtitle;
        }
        $post->updated_by = Auth::id();
        $post->save();

        Toastr::success('Successfully Updated Post');

        return redirect(route('posts.index'));
    }

    public function toogleStatus(Request $request)
    {
        $post = Post::find($request->id);

        if($post->status == 1 )
        {
            $post->status = 0;

            $vals = array(
                'message' => 'Post Deativated');
        }
        else if($post->status == 0)
        {
            $post->status = 1;

            $vals = array(
                'message' => 'Post Activated');
        }

        $post->save();
        echo json_encode($vals);
        exit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post=Post::find($id);

        $post->deleted_by = Auth::id();

        $post->save();

        $post->delete();

        Toastr::error('Successfully Deleted The Post');


        Session::flash('success','Successfully deleted the post!');
        return redirect()->route('posts.index');
    }
}
