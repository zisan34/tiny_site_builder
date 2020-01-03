<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use Str;
use App\Note;
use App\User;
use Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Auth::user()->notes()->latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('DT_from', function($row){
                        $from = $row->user->name;
                        return $from;
                    })
                    ->addColumn('DT_description', function($row){

                        return Str::words($row->description, '5');

                    })
                    ->addColumn('action', function($row){
   
                    $btn = '<a href="#" class="btn bg-green btn-xs view_data" data-id="'.$row->id . '" data-toggle="modal" data-target="#view_Note_info"><i class="fa fa-eye"></i></a>';

    
                    return $btn;
                    })
                    ->rawColumns(['DT_description', 'DT_from', 'action'])
                    ->make(true);
        }
        return view('admin.notes.index');
    }
    public function outGoing(Request $request)
    {
        $users = User::all();

        if ($request->ajax()) {
            $data = Note::where('created_by', Auth::id())->latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('DT_from', function($row){
                        $from = $row->user->name;
                        return $from;
                    })
                    ->addColumn('DT_to', function($row){
                        $to = '';
                        foreach ($row->users as $user) {
                            $to .= $user->name . ', ';
                        }
                        
                        return rtrim($to, ", ");
                    })
                    ->addColumn('DT_description', function($row){

                        return Str::words($row->description, '5');

                    })
                    ->addColumn('action', function($row){
   
                    $btn = '<a href="#" class="btn bg-green btn-xs view_data" data-id="'.$row->id . '" data-toggle="modal" data-target="#view_Note_info"><i class="fa fa-eye"></i></a>';

                    $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn bg-purple btn-xs edit editNote"><i class="fa fa-pencil"></i></a>';

                    $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-xs deleteNote"><i class="fa fa-trash"></i></a>';

    
                    return $btn;
                    })
                    ->rawColumns(['DT_description', 'DT_to', 'DT_from', 'action'])
                    ->make(true);
        }
        return view('admin.notes.outgoing', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('admin.notes.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return response()->json($request->note_description);

        //
        //note_title
        //reciever
        //note_description
        $this->validate($request, [
            'note_title' => 'required',
            'reciever.*' => 'required',
            'note_description' => 'required'
        ]);

        $user_id = Auth::id();
        if($request->note_id)
        {
            $note = Note::find($request->note_id);
        }
        else
        {
            $note = new Note;
        }

        $note->title = $request->note_title;
        $note->description = $request->note_description;
        $note->important = $request->important == 'on' ? 1 : 0;
        $note->public = $request->public == 'on' ? 1 : 0;
        $note->created_by = Auth::id();
        $note->save();

        if($request->note_id)
        {
            $note->users()->sync($request->reciever);
        }
        else
        {
            $note->users()->attach($request->reciever);
        }

        if($request->ajax()){
            return response()->json(['success'=>'Note saved successfully.']);
        }
        else
        {
            return redirect()->route('notes.outgoing');
        }

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
        $note = Note::find($id);
        $users = $note->users->pluck('id');

        $vals = array(
            'note' => $note,
            'users' => $users
        );

        return json_encode($vals);

        // return response()->json(['note ' => $note, 'users' => $users]);
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

    public function viewData(Request $request)
    {
        $note = Note::find($request->id);
        // return json_encode($page);
        if($note->created_by == Auth::id() || $note->checkUser(Auth::id()))
        {
            $to = '';
            foreach ($note->users as $user) {
                $to .= $user->name . ', ';
            }
            $vals = array(
                'title' => $note->title,
                'description' => $note->description,
                'important' => $note->important,
                'public' => $note->public,
                'users' => rtrim($to, ", ")
            );
            return json_encode($vals);
        }
        else
        {
            $vals = array('error' => 'Invalid Request');
            return json_encode($vals);
        }

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
        $note = Note::find($id);
        if($note->created_by == Auth::id())
        {
            $note->deleted_by = Auth::id();
            $note->save();
            $note->delete();
            return response()->json(['success'=>'Note deleted successfully.']);
        }
        else
        {
            return response()->json(['error'=>'You are not authorized to do this.']);            
        }
    }
}
