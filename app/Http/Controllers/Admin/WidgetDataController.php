<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Widget;
use App\WidgetData;
use App\Page;
use App\Post;
use Auth;
use Session;
use Toastr;

use Intervention\Image\ImageManagerStatic as Image;

use App\Traits\B64ImageSaver;

class WidgetDataController extends Controller
{
    use B64ImageSaver;
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
        $widgets = Widget::orderBy('updated_at', 'desc')->get();
        $widget_datas = WidgetData::orderBy('updated_at', 'desc')->get();
        $pages = Page::orderBy('updated_at', 'desc')->get();
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('admin.website.settings.widgets.widget_datas.index', compact('widgets', 'pages', 'posts', 'widget_datas'));
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
        $widget_data = new WidgetData;
        $widget_data->link_title = $request->link_title;
        $widget_data->widget_id = $request->widget;
        $widget_data->link_type = $request->link_type;

        $widget = Widget::find($request->widget);

        if($widget->type == 3)
        {

            if($request->info_data)
            {
                $widget_data->model = "Informative";

                $info_data = $this->saveImage('uploads/widget/',$request->info_data);

                $widget_data->info_data =  $info_data;
            }
            else
            {
                return redirect()->back();
            }
        }
        elseif($widget->type == 2)
        {
            if($request->link_type == 3)
            {
                $widget_data->model = "CustomLink";
                $widget_data->link = $request->link;
            }
            elseif($request->link_type == 2)
            {
                if ($request->post)
                {
                    $widget_data->model = "Post";
                    $widget_data->model_id = $request->post;
                }
                else
                {
                    Toastr::error('Select Post');
                    return redirect()->back();
                }
            }
            elseif ($request->link_type == 1)
            {
                if ($request->page)
                {
                    $widget_data->model = "Page";
                    $widget_data->model_id = $request->page;
                }
                else
                {
                    Toastr::error('Select Page');
                    return redirect()->back();
                }
            }
            else
            {
                Toastr::error('Select Link Type');
                return redirect()->back();
            }

        }

        $widget_data->order = $request->order;
        $widget_data->created_by = Auth::id();

        $widget_data->save();

        Toastr::success('WidgetData Added Successfully');

        return redirect()->route('widget-data.index');

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
    public function getType(Request $request)
    {
        $widget = Widget::find($request->id);


        $vals = array(
            'type' => $widget->type
        );

        $vals = json_encode($vals);

        echo $vals;
        exit();
    }
    public function viewData(Request $request)
    {
        $widget = WidgetData::find($request->id);

        $vals = array(
            'post' => $widget->post,
            'designation' => $widget->designation,
            'name' => $widget->name,
            'info' => $widget->info,
            'image' => $widget->image
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
        $widget = WidgetData::find($id);
        return view('admin.website.settings.widget-data.edit',compact('widget'));
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
        $widget = WidgetData::find($id);        
        $widget->title = $request->title;
        $widget->parent_page_id = $request->parent_page;
        $widget->type = $request->type;
        $widget->popup = $request->popup;
        $widget->short_desc = $request->short_desc;
        $widget->order = $request->order;
        $widget->updated_by = Auth::id();

        $widget->save();

        Toastr::success('WidgetData Updated Successfully');


        return redirect()->route('widget-data.index');
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
        $widget = WidgetData::find($id);

        $widget->deleted_by = Auth::id();

        $widget->save();

        $widget->delete();

        Toastr::error('Widget Data Deleted Successfully');


        return redirect()->route('widget-data.index');


    }
}
