<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;
use Toastr;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = Video::all();
        return view('admin.website.albums.videos.index', compact('videos'));

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
            'video' => 'nullable|mimes:mimes:mp4,mov,ogg,qt | max:60000',
            'link' => 'nullable|url'
        ]);
        $video = new Video;
        $video->title = $request->title;
        $video->slug = preg_replace('/\s+/u', '-', trim($request->title));
        $video->type = $request->content_type;
        $video->order = $request->order;
        $video->caption = $request->caption;
        if($request->content_type == 1)
        {
            $video->video = $request->link;
        }
        else if($request->content_type == 2)
        {

            if ($request->hasFile('video_upload')) 
            {                
                $content = $request->video_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/videos', $content_new);
                $video->video = '/uploads/videos/' . $content_new;
            }
        }
        $video->created_by = Auth::id();

        $video->save();
        Toastr::success('Uploaded Video');
        return redirect()->route('videos.index');

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
        $video = Video::find($id);
        return view('admin.website.albums.videos.edit',compact('video'));
    }
    public function toogleStatus(Request $request)
    {
        $video = Video::find($request->id);

        if($video->status == 1 )
        {
            $video->status = 0;

            $vals = array(
                'message' => 'Video Deativated');
        }
        else if($video->status == 0)
        {
            $video->status = 1;

            $vals = array(
                'message' => 'Video Activated');
        }

        $video->save();
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
        //
        $this->validate($request,[
            'title' => 'required'
        ]);
        $video = Video::find($id);
        $video->title = $request->title;
        $video->slug = preg_replace('/\s+/u', '-', trim($request->title));
        $video->order = $request->order;
        $video->caption = $request->caption;
        $video->updated_by = Auth::id();

        $video->save();
        Toastr::success('Video Updated Successfully');

        return redirect()->route('videos.index');
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
        $video = Video::find($id);
        $video->deleted_by = Auth::id();
        $video->save();
        $video->delete();
        Toastr::error('Video deleted');
        return redirect()->back();
    }
}
