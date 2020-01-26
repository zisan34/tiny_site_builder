<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Toastr;
use App\Events;

class Eventcontroller extends Controller
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
    public function index(Request $request)
    {
        //
        
        if(request()->ajax())
        {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $results = Events::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get();

            $data = [];
            foreach ($results as $result) {
                $end_DateTime = new \DateTime($result->end.' +1 day');
                $data[] = array(
                    'id' => $result->id,
                    'title' => $result->title,
                    'start' => $result->start,
                    'end' => $end_DateTime->format('Y-m-d H:i:s'),
                    'color' => $result->color,
                    'description' => $result->description
                );
            }
            return response()->json($data);
        }
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
        if($request->event_id)
        {
            $event = Events::find($request->event_id);
            if($event->created_by != Auth::id())
                return response()->json(['error'=>'You are not authorized to do this.']);
        }
        else
        {
            $event = new Events;
        }

        $event->user_id = Auth::id();

        $event->created_by = Auth::id();
        $event->title = $request->event_title;
        $event->start = date('Y-m-d', strtotime($request->event_start));
        $event->end = date('Y-m-d', strtotime($request->event_end));
        $event->description = $request->event_description;
        $event->color = $request->event_color;
        $event->save();
        return response()->json(['success'=>'Event saved successfully']);
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
        $event = Events::find($id);

        $event['creator_name'] = $event ? $event->creator->name : '';

        return $event;
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
        $event = Events::find($id);
        // if($event->created_by != Auth::id())
        if($event->created_by == Auth::id())
        {
            $event['creator_name'] = $event->creator->name;

            return $event;
        }
        else
        {
            return response()->json(['error'=>'You are not authorized to do this.']);
        }

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
        $event = Events::find($id);

        if($event->created_by != Auth::id())
            return response()->json(['error'=>'You are not authorized to do this.']);

        $event->deleted_by = Auth::id();
        $event->save();
        $event->delete();
        return response()->json(['success'=>'Event deleted successfully']);
    }
}
