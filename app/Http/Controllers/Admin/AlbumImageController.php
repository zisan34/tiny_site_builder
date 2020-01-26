<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use App\AlbumImage;
use Auth;
use Toastr;
class AlbumImageController extends Controller
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
        $this->validate($request, [
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name = time() . '_' . Auth::id() . '_' . $file->getClientOriginalName();
                $file->move('uploads/images',$name);
                $images[]=$name;
            }
        }

        foreach ($images as $image) {
            $img = new AlbumImage;
            $img->image = '/uploads/images/' . $image;
            $img->album_id = $request->album;
            $img->save();
        }
        return redirect()->route('albums.images',['id'=>$request->album]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = AlbumImage::find($id);

        $image->deleted_by = Auth::id();

        $image->save();

        $image->delete();

        return redirect()->back();
    }
}
