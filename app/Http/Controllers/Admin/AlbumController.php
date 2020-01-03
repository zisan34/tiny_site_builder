<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use Auth;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::all();
        return view('admin.website.albums.index', compact('albums'));
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

        $album = new Album;

        $album->title = $request->title;
        $album->caption = $request->caption;
        $album->order = $request->order;
        $album->visibility = $request->album_visibility;
        $album->visibility_pass = $request->protected_pass;

        if ($request->hasFile('cover_image')) 
        {                
            $image = $request->cover_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $album->cover_image = '/uploads/images/' . $image_new;
        }
        $album->created_by = Auth::id();

        $album->save();

        return redirect()->route('albums.index');


    }


    public function images($id)
    {
        $album = Album::find($id);
        return view('admin.website.albums.images', compact('album'));
    }



    public function toogleStatus(Request $request)
    {
        $album = Album::find($request->id);

        if($album->status == 1 )
        {
            $album->status = 0;

            $vals = array(
                'message' => 'Album Deativated');
        }
        else if($album->status == 0)
        {
            $album->status = 1;

            $vals = array(
                'message' => 'Album Activated');
        }

        $album->save();
        echo json_encode($vals);
        exit();
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
        $album = Album::find($id);
        return view('admin.website.albums.edit', compact('album'));
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
        $album = Album::find($id);
        $album->title = $request->title;
        $album->caption = $request->caption;
        $album->order = $request->order;
        $album->visibility = $request->album_visibility;
        $album->visibility_pass = $request->protected_pass;

        if ($request->hasFile('cover_image')) 
        {                
            $image = $request->cover_image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $album->cover_image = '/uploads/images/' . $image_new;
        }
        $album->updated_by = Auth::id();

        $album->save();
        return redirect()->route('albums.index');
        

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
    }
}
