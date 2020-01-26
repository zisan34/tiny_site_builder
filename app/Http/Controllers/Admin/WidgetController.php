<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Widget;
use App\Member;
use App\Page;
use Auth;
use Session;
use Toastr;
class WidgetController extends Controller
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
        $widgets = Widget::orderBy('updated_at', 'desc')->get();
        $pages = Page::orderBy('updated_at', 'desc')->get();
        return view('admin.website.settings.widgets.index', compact('widgets', 'pages'));
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

        $widget = new Widget;
        $widget->title = $request->title;
        $widget->parent_page_id = ($request->parent_page) ? implode(",",$request->parent_page) : '-1';
        $widget->type = $request->type != 2 ? 3 : 2;
        $widget->popup = $request->popup == 'on' ? '1':'0';
        $widget->short_desc = $request->short_desc == 'on' ? '1':'0';
        $widget->order = $request->order;
        $widget->created_by = Auth::id();

        $widget->save();

        Toastr::success('Widget Added Successfully');

        return redirect()->route('widgets.index');

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
    public function x($id)
    {
        $widget = Widget::find($id);

        if($widget->type == 1)
        {
            $id = $widget->datas->first()->model_id;
            $member = Member::find($id);

            $vals = array(
                'name' => $widget->title,
                'info' => $member->info,
                'image' => $member->image
            );

            $vals = json_encode($vals);
            echo $vals;
            exit();
        }
        elseif($widget->type == 2)
        {
            if(count($widget->datas)>0)
            {
                $info = '';

                foreach ($widget->datas as $widget_data) 
                {
                    $info .= $widget_data->title. ' '. $widget_data->link;
                }
            }
            else
            {
                $info = $widget_data->title . '<br>' . $widget_data->link . '<br>';

            }

            $vals = array(
                'name' => $widget->title,
                'info' => $info,
                'image' => ''
            );

            $vals = json_encode($vals);
            echo $vals;
            exit();
        }
    }
    public function viewData(Request $request)
    {
        $widget = Widget::find($request->id);

        if($widget->type == 1)
        {
            $id = $widget->datas->first()->model_id;
            $member = Member::find($id);

            $vals = array(
                'name' => $widget->title,
                'info' => $member->info,
                'image' => $member->image
            );

            $vals = json_encode($vals);
            echo $vals;
            exit();
        }
        elseif($widget->type == 2)
        {
            if(count($widget->datas)>0)
            {
                $info = '';
                foreach ($widget->datas as $widget_data) 
                {
                    $info .= $widget_data->title. ' '. $widget_data->link;
                    
                }
            }
            else
            {
                $info = $widget_data->title + '<br>' + $widget_data->link;

            }

            $vals = array(
                'name' => $widget->title,
                'info' => $info,
                'image' => ''
            );

            $vals = json_encode($vals);
            echo $vals;
            exit();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $widgets = Widget::all();
        $pages = Page::all();
        $widget = Widget::find($id);
        return view('admin.website.settings.widgets.edit',compact('widget', 'pages', 'widgets'));
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
        $widget = Widget::find($id);        
        $widget->title = $request->title;
        $widget->parent_page_id = ($request->parent_page) ? implode(",",$request->parent_page) : '-1';
        $widget->popup = ($request->popup == 'on') ? '1':'0';
        $widget->short_desc = ($request->short_desc == 'on') ? '1':'0';
        $widget->order = $request->order;
        $widget->updated_by = Auth::id();

        $widget->save();

        Toastr::success('Widget Updated Successfully');


        return redirect()->route('widgets.index');
    }

    public function toogleStatus(Request $request)
    {
        $widget = Widget::find($request->id);

        if($widget->status == 1 )
        {
            $widget->status = 0;

            $vals = array(
                'message' => 'Widget Deactivated Successfully');

        }
        else if($widget->status == 0)
        {
            $widget->status = 1;

            $vals = array(
                'message' => 'Widget Activated Successfully');

        }
        $widget->save();
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
        $widget = Widget::find($id);

        $widget->deleted_by = Auth::id();

        $widget->save();

        if(count($widget->datas))
        {
            foreach ($widget->datas as $data) 
            {
                $data->deleted_by = Auth::id();
                $data->save();
                $data->delete();
            }
        }

        $widget->delete();

        Toastr::error('Widget Deleted Successfully');


        return redirect()->route('widgets.index');


    }
}
