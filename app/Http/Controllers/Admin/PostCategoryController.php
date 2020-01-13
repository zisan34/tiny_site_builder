<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCategory;
use Auth;
use Session;
use Toastr;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PostCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();
        return view('admin.website.posts.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'slug' => 'nullable|unique:post_categories'
        ]);
        $category = new PostCategory;

        $category->title = $request->title;
        $category->created_by = Auth::id();
        $category->description = $request->description;
        $category->parent_id = $request->parent_category;
        $category->order = $request->order;

        if($request->slug)
        {
            if(count(PostCategory::where('slug', '=', $request->slug)->get())>0)
            {
                $slug .= '-1';
            }
            else
            {
                $category->slug = $request->slug;
            }
        }
        else
        {
            $slug = preg_replace('/\s+/u', '-', trim(strtolower($request->title)));
            if(count(PostCategory::where('slug', '=', $slug)->get())>0)
            {
                $slug .= '-1';
            }
            $category->slug           = $slug;
        }

        if(isset($request->parent_category))
        {
            $parent = PostCategory::find($request->parent_category);
            $parent_level = $parent->level;
            $category->level = $parent_level + 1;
        }

        $category->save();

        Toastr::success('Successfully Created New Category!');


        return redirect()->route('categories.index');
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
        $category = PostCategory::find($request->id);

        $vals = array(
            'title' => $category->title,
            'slug' => $category->slug,
            'description' => $category->description
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
        $category   =   PostCategory::find($id);

        $categories = PostCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return view('admin.website.posts.categories.edit', compact('category', 'categories'));
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
        //
        $this->validate($request,[
            'title' => 'required',
            'slug' => 'nullable'
        ]);
        $category = PostCategory::find($id);

        $category->title = $request->title;
        $category->updated_by = Auth::id();
        $category->description = $request->description;
        $category->parent_id = $request->parent_category;

        if($request->slug)
        {
            if($request->slug == $category->slug)
            {
                $category->slug = $request->slug;
            }
            else
            {
                if(count(PostCategory::where('slug', '=', $request->slug)->get())>0)
                {
                    $request->slug .= '-1';
                }
            }
            $category->slug = $request->slug;
        }
        else
        {
            $slug = preg_replace('/\s+/u', '-', trim(strtolower($request->title)));
            if(count(PostCategory::where('slug', '=', $slug)->get())>0)
            {
                $slug .= '-1';
            }
            $category->slug           = $slug;
        }

        if(isset($request->parent_category))
        {
            $parent = PostCategory::find($request->parent_category);
            $parent_level = $parent->level;
            $category->level = $parent_level + 1;
        }

        $category->save();

        Toastr::success('Successfully Updated Category!');

        return redirect()->route('categories.index');
    }
    public function toogleStatus(Request $request)
    {
        $category = PostCategory::find($request->id);

        if(count($category->post_subcategories)>0 )
        {
            $vals = array(
                'message' => 'Invalid Request');            
            echo json_encode($vals);
            exit();

        }
        else
        {
            if($category->status == 1 )
            {
                $category->status = 0;

                $vals = array(
                    'message' => 'PostCategory Deativated');
            }
            else if($category->status == 0)
            {
                $category->status = 1;

                $vals = array(
                    'message' => 'PostCategory Activated');
            }

            $category->save();
            echo json_encode($vals);
            exit();
        }
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

        $category=PostCategory::find($id);

        $category->deleted_by = Auth::id();

        $category->save();

        if(count($category->post_subcategories)>0 || count($category->subcategory_posts)>0 || count($category->category_posts)>0 )
        {
            Toastr::error('This Category can not be deleted!');
            return redirect()->back();
        }

        $category->delete();

        Toastr::error('Successfully Deleted Category!');

        return redirect()->route('categories.index');
    }
}
