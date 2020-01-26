<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Auth;
use Session;
use Toastr;

class SliderController extends Controller
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
        $sliders = Slider::orderBy('order')->orderBy('updated_at', 'desc')->get();
        return view('admin.website.sliders.index',compact('sliders'));
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
            'file_upload' => 'required|mimes:jpg,jpeg,png',
            'order' => 'numeric'
        ]);

        $slider = new Slider;
        $slider->user_id = Auth::id();
        $slider->created_by = Auth::id();
        $slider->order = $request->order;
        $slider->position = $request->position;
        $slider->caption = $request->caption;

        if ($request->hasFile('file_upload')) 
        {
            $content = $request->file_upload;
            $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
            $content->move('uploads/images', $content_new);
            $slider->image = '/uploads/images/' . $content_new;
        }

        $slider->save();

        Toastr::success('Successfully Added Slider');


        return redirect()->route('sliders.index');
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
        $slider = Slider::find($request->id);

        $vals = array(
            'caption' => $slider->caption,
            'image' => $slider->image
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
        $slider = Slider::find($id);
        return view('admin.website.sliders.edit',compact('slider'));


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

        $slider = Slider::find($id);
        $slider->updated_by = Auth::id();
        $slider->order = $request->order;
        $slider->caption = $request->caption;
        $slider->position = $request->position;

        if ($request->hasFile('file_upload')) 
        {
            $content = $request->file_upload;
            $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
            $content->move('uploads/images', $content_new);
            $slider->image = '/uploads/images/' . $content_new;
        }

        $slider->save();

        Toastr::success('Successfully Updated Slider');


        return redirect()->route('sliders.index');
    }
    public function toogleStatus(Request $request)
    {
        $slider = Slider::find($request->id);

        if($slider->status == 1 )
        {
            $slider->status = 0;

            $vals = array(
                'message' => 'Slider Deativated');
        }
        else if($slider->status == 0)
        {
            $slider->status = 1;

            $vals = array(
                'message' => 'Slider Activated');
        }

        $slider->save();
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
        $slider=Slider::find($id);

        $slider->deleted_by = Auth::id();

        $slider->save();

        $slider->delete();

        Toastr::error('Successfully Deleted Slider');


        return redirect()->route('sliders.index');
    }
}
