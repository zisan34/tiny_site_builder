<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostSubCategory;
use App\PostCategory;
use Auth;
use Toastr;
class PostSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.website.posts.subcategories.index')
                    ->with('subcategories',PostSubCategory::all())
                    ->with('categories',PostCategory::all());

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
        $subcategory = new PostSubCategory;

        $subcategory->title = $request->title;
        $subcategory->created_by = Auth::id();
        $subcategory->slug = $request->slug;
        $subcategory->post_category_id = $request->parent_category;
        $subcategory->description = $request->description;

        $subcategory->save();

        Toastr::success('Successfully Created New Post Category');

        return redirect()->route('subcategories.index');
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
        $subcategory = PostSubCategory::find($request->id);

        $vals = array(
            'title' => $subcategory->title,
            'category' => $subcategory->post_category->title,
            'content' => $subcategory->description
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
        $subcategory   =   PostSubCategory::find($id);

        $categories = PostCategory::all();

        return view('admin.website.posts.subcategories.edit', compact('subcategory', 'categories'));
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
        $subcategory = PostSubCategory::find($id);

        $subcategory->title = $request->title;
        $subcategory->updated_by = Auth::id();
        $subcategory->slug = $request->slug;
        $subcategory->post_category_id = $request->parent_category;
        $subcategory->description = $request->description;

        $subcategory->save();

        Toastr::success('Successfully Updated Post Category');

        return redirect()->route('subcategories.index');
    }


    public function toogleStatus($id)
    {
        $subcategory = PostSubCategory::find($id);

        if($subcategory->status == 1 )
        {
            $subcategory->status = 0;
            Toastr::error('Subcategory Deactivated');

        }
        else if($subcategory->status == 0)
        {
            $subcategory->status = 1;
            Toastr::success('Subcategory Activated');

        }

        $subcategory->save();
        
        return redirect()->route('subcategories.index');
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

        $subcategory=PostSubCategory::find($id);

        $subcategory->deleted_by = Auth::id();

        $subcategory->save();

        $subcategory->delete();

        Toastr::error('Successfully Deleted Sub Category!');

        return redirect()->route('subcategories.index');
    }
}
