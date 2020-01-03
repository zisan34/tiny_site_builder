<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Draft_type;
use Auth;
use Session;
use Toastr;
class DraftTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = Draft_type::where('parent_id', NULL)->orderBy('updated_at', 'desc')->get();
        return view('admin.drafts.types.index', compact('types'));
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
        $type = new Draft_type;
        $type->name = $request->name;
        $type->short_name = $request->short_name;
        $type->order = $request->order;
        $type->parent_id = $request->parent_type;
        $type->created_by = Auth::id();
        $type->save();
        Toastr::success('Type Created');

        return redirect()->route('draft_type.index');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $types = Draft_type::where('parent_id', NULL)->orderBy('updated_at', 'desc')->get();
        $type = Draft_type::find($id);
        return view('admin.drafts.types.edit', compact('type', 'types'));

    }
    public function toogleStatus(Request $request)
    {
        $type = Draft_type::find($request->id);

        if($type->status == 1 )
        {
            $type->status = 0;

            $vals = array(
                'message' => 'Draft Deactivated');

        }
        else if($type->status == 0)
        {
            $type->status = 1;

            $vals = array(
                'message' => 'Draft Activated');

        }

        $type->save();
        json_encode($vals);
        echo json_encode($vals);
        exit();

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
        $type = Draft_type::find($id);
        $type->name = $request->name;
        $type->short_name = $request->short_name;
        $type->parent_id = $request->parent_type;
        $type->order = $request->order;
        $type->updated_by = Auth::id();
        $type->save();
        Toastr::success('Type Updated');

        return redirect()->route('draft_type.index');

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
        $type = Draft_type::find($id);
        $type->deleted_by = Auth::id();
        $type->save();
        $type->delete();
        Toastr::error('Type Deleted');
        return redirect()->route('draft_type.index');


    }
}
