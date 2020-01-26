<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Carbon\Carbon as Carbon;
use Auth;
use App\Todo;
use App\User;

class TodoController extends Controller
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
    public function getTodos(Request $request)
    {
        $take_no = 5;
        $todos = Todo::orderBy('deadline', 'asc')->skip($request->skip_no)->take($take_no)->get();

        $todo_count = count(Todo::all());

        $vals = array('todos' => $todos,
                    'skip_no' => $request->skip_no,
                    'take_no' => $take_no,
                    'todo_count' => $todo_count
                    );
        return json_encode($vals);
    }
    public function toogleStatus(Request $request)
    {
        $todo = Todo::find($request->id);

        if($todo->status == 1 )
        {
            $todo->status = 0;

            $vals = array(
                'message' => 'Marked as to be done.');
        }
        else if($todo->status == 0)
        {
            $todo->status = 1;

            $vals = array(
                'message' => 'Marked as done.');
        }

        $todo->save();
        echo json_encode($vals);
        exit();
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
        $this->validate($request, [
            'task' => 'required',
            'todo_deadline' => 'required'
        ]);

        $user_id = Auth::id();


        if($request->todo_id)
        {
            $todo = Todo::find($request->todo_id);
        }
        else
        {
            $todo = new Todo;
        }


        $todo->task = $request->task;
        $todo->deadline = Carbon::parse($request->todo_deadline);

        $todo->important = $request->important == 'on' ? 1 : 0;
        $todo->public = $request->public == 'on' ? 1 : 0;
        // return Carbon::parse($request->todo_deadline);

        $todo->created_by = Auth::id();
        $todo->save();

        // if($request->todo_id)
        // {
        //     $todo->users()->sync($request->reciever);
        // }
        // else
        // {
        //     $todo->users()->attach($request->reciever);
        // }

        return response()->json(['success'=>'Todo saved successfully.']);
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
        $todo = Todo::find($id);
        $todo->setAttribute('deadlinetime', date('h:i A', strtotime($todo->deadline)));

        return response()->json($todo);
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
        $todo = Todo::find($id);
        $todo->deleted_by = Auth::id();
        $todo->save();
        $todo->delete();

        return response()->json(['success'=>'Todo deleted successfully.']);
    }
}
