<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\PostCategory;
use App\Widget;
use App\Album;
use App\Video;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cat_slugs = ['news-and-events', 'publications',  'unit-informations', 'branch-informations'];

        $categories = PostCategory::wherein('slug', $cat_slugs)->orderBy('updated_at', 'desc')->get();
        $welcome_page = Page::where('slug', '=', 'welcome')->first();
        $widgets = Widget::where('parent_page_id', 'like', '%'.$welcome_page->id.'%')->get();

        $units = PostCategory::where('slug', '=', 'unit-informations')->orderBy('updated_at', 'desc')->latest()->first();
        return view('welcome', compact('categories', 'welcome_page', 'widgets', 'units'));
    }
    public function getPage($id)
    {
        $page = Page::find($id);
        $model = "Page";
        $widgets = Widget::where('parent_page_id', 'like', '%'.$page->id.'%')->get();
        // $widgets = $page->widgets;
        if($page->visibility == 2)
        {
            if(Auth::check())
            {
                return view('frontend.blog-single',compact('page', 'widgets', 'model'));
            }
            else
            {
                return redirect()->route('login');
            }
        }
        elseif($page->visibility == 1)
        {
            $page->content = "";
        }
        return view('frontend.blog-single',compact('page', 'widgets', 'model'));
    }
    public function getPostCategory($id)
    {
        $post_category = PostCategory::find($id);
        // $widgets = Widget::where('parent_page_id', 'like', '%'.$post_category->id.'%')->get();
        // $widgets = $page->widgets;
        return view('frontend.category',compact('post_category'));
    }
    public function getPost($id)
    {
        $page = Post::find($id);
        $model = "Post";
        if($page->visibility == 2)
        {
            if(Auth::check())
            {
                return view('frontend.blog-single',compact('page', 'model'));
            }
            else
            {
                return redirect()->route('login');
            }
        }
        elseif($page->visibility == 1)
        {
            $page->content = "";
            $page->title = "";
        }
        return view('frontend.blog-single',compact('page', 'model'));
    }
    public function getContent(Request $request)
    {
        $incorrect = "Incorrect Password";

        if($request->model == "Post")
        {
            $page = Post::find($request->id);
            if($page->visibility_pass == $request->pass)
            {                
                $vals = array(
                    'title' => $page->title,
                    'category' => $page->post_category->title,
                    'image' => $page->featured_image,
                    'content' => $page->content,
                    'content_type' => $page->content_type
                );
                $vals = json_encode($vals);
                echo $vals;
                exit();
            }
            else
            {
                $vals = array(
                    'message' => $incorrect
                );
                echo json_encode($vals);
                exit();
            }

        }
        else if($request->model == "Page")
        {
            $page = Page::find($request->id);
            if($page->visibility_pass == $request->pass)
            {
                $vals = array(
                    'title' => $post->title,
                    'image' => $post->featured_image,
                    'content' => $post->content,
                    'content_type' => $page->content_type
                );
                $vals = json_encode($vals);
                echo $vals;
                exit();
            }
            else
            {
                $vals = array(
                    'message' => $incorrect
                );
                echo json_encode($vals);
                exit();
            }
        }
        else if($request->model == "Album")
        {
            $gallery = Album::find($request->id);
            if($gallery->visibility_pass == $request->pass)
            {
                $vals = array();
                foreach ($gallery->images as $image) {
                    array_push($vals, [
                        'src' => $image->image
                    ]);
                }

                echo json_encode($vals);
                exit();
            }
            else
            {
                $vals = array(
                    'message' => $incorrect
                );
                echo json_encode($vals);
                exit();
            }
        }
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

    public function viewAlbumImages(Request $request)
    {
        $gallery = Album::find($request->id);

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
    public function getGallery($id)
    {
        $gallery = Album::find($id);

        if($gallery->visibility == 2)
        {
            if(Auth::check())
            {
                return view('frontend.photos',compact('gallery'));
            }
            else
            {
                return redirect()->route('login');
            }
        }
        elseif($gallery->visibility == 1)
        {
            $gallery->cover_image = "";
            $gallery->caption = "";
        }
        return view('frontend.photos',compact('gallery'));
    }
    public function photoGallery()
    {
        $albums = Album::all();
        return view('frontend.photo_gallery', compact('albums'));
    }
    public function videoGallery()
    {
        $videos = Video::where( 'status', '=', '1')->get();
        return view('frontend.video_gallery', compact('videos'));
    }
}
