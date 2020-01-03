<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MemberCategory;
use App\Member;
use Auth;
use Toastr;
class MemberCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = MemberCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();
        return view('admin.website.members.categories.index', compact('categories'));
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
        $category = new MemberCategory;

        $category->title = $request->title;
        $category->created_by = Auth::id();
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->parent_id = $request->parent_category;
        $category->order = $request->order;

        if(isset($request->parent_category))
        {
            $parent = MemberCategory::find($request->parent_category);
            $parent_level = $parent->level;
            $category->level = $parent_level + 1;
        }

        $category->save();

        Toastr::success('Successfully Created New Member Category!');


        return redirect()->route('member-categories.index');
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
        $category = MemberCategory::find($request->id);

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
        $category   =   MemberCategory::find($id);

        $categories = MemberCategory::where('parent_id', NULL)->orderBy('order', 'asc')->get();

        return view('admin.website.members.categories.edit', compact('category', 'categories'));
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
        $category = MemberCategory::find($id);

        $category->title = $request->title;
        $category->updated_by = Auth::id();
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->parent_id = $request->parent_category;


        if(isset($request->parent_category))
        {
            $parent = MemberCategory::find($request->parent_category);
            $parent_level = $parent->level;
            $category->level = $parent_level + 1;
        }

        $category->save();

        Toastr::success('Successfully Updated Category!');

        return redirect()->route('member-categories.index');
    }

    public function toogleStatus(Request $request)
    {
        $mem_cat = MemberCategory::find($request->id);

        if(count($mem_cat->member_subcategories)>0)
        {
            $vals = array(
                'message' => 'Invalid Request');            
            echo json_encode($vals);
            exit();

        }
        else
        {
            if($mem_cat->status == 1 )
            {
                $mem_cat->status = 0;

                $vals = array(
                    'message' => 'MemberCategory Deativated');
            }
            else if($mem_cat->status == 0)
            {
                $mem_cat->status = 1;

                $vals = array(
                    'message' => 'MemberCategory Activated');
            }

            $mem_cat->save();
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

        $category=MemberCategory::find($id);

        $category->deleted_by = Auth::id();

        $category->save();

        if(count($category->member_subcategories)>0)
        {
            Toastr::error('Category With sub categories can not be deleted!');
            return redirect()->back();
        }

        $category->delete();

        Toastr::error('Successfully Deleted Category!');

        return redirect()->route('member-categories.index');
    }
}
