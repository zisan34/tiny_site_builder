<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialMedia;
use Auth;
use Session;
use Toastr;

class SocialMediaController extends Controller
{
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
        //
        return view('admin.website.themes.socialmedias.index')
                    ->with('social_medias' , SocialMedia::orderBy('order','asc')->get());
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
        // return $request;
        $this->validate($request,[
            'name' => 'required',
            'link' => 'required|url'
        ]);
        $socialMedia = new SocialMedia;

        $socialMedia->name = $request->name;
        $socialMedia->link = $request->link;
        $socialMedia->icon = 'fa ' . $request->icon ;
        $socialMedia->order = $request->order;
        $socialMedia->created_by = Auth::id();
        $socialMedia->save();

        Toastr::success('Added Social Media Link');

        return redirect()->route('social_medias.index');
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
    }

    public function toogleStatus(Request $request)
    {
        $socialMedia = SocialMedia::find($request->id);

        if($socialMedia->status == 1 )
        {
            $socialMedia->status = 0;

            $vals = array(
                'message' => 'Link Deactivated');

        }
        else if($socialMedia->status == 0)
        {
            $socialMedia->status = 1;

            $vals = array(
                'message' => 'Link Activated');

        }

        $socialMedia->save();
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
        // $socialMedia = SocialMedia::find($id);

        // $socialMedia->deleted_by = Auth::id();

        // $socialMedia->save();

        // $socialMedia->delete();

        // Toastr::error('Social Media Link Deleted');


        // return redirect()->back();
        return view('admin.website.themes.socialmedias.index')
                    ->with('social_medias' , SocialMedia::orderBy('order','asc')->get());
    }
}
