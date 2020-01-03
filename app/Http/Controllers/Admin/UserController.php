<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;
use App\User;
use App\Profile;
use Toastr;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('updated_at', 'desc')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));

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

            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role.*' => 'required',
        ]);
        // return $request;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_by' => Auth::id(),
            'rank' => $request->rank
        ]);

        $user->syncRoles($request->role);

        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->image = asset('/uploads/profile/avatar.jpg');
        $profile->save();


        Toastr::success('User Added Successfully');
        return redirect()->route('users.index');

    }
    public function toogleStatus(Request $request)
    {
        $user = User::find($request->id);

        if($user->status == 1 )
        {
            $user->status = 0;

            $vals = array(
                'message' => 'User Deativated');
        }
        else if($user->status == 0)
        {
            $user->status = 1;

            $vals = array(
                'message' => 'User Activated');
        }

        $user->save();
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
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
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
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::find($id);
        if($request->email != $user->email)
        {
            $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users'
            ]);
        }

        if($request->password)
        {
            $user->password = Hash::make($request->password);
        }
        $user->name = $request->name;        
        $user->email = $request->email;
        $user->rank = $request->rank;

        $user->syncRoles($request->role);
        
        $user->updated_by = Auth::id();
        $user->save();
        Toastr::success('User Updated successfully');
        return redirect()->route('users.index');
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
        $user = User::find($id);
        if($user == Auth::user())
        {
            Toastr::error('You can not delete your own account');
            return redirect()->back();
        }
        $user->deleted_by = Auth::id();
        $user->save();
        $user->delete();
        Toastr::success('Successfully deleted the User');
        return redirect()->route('users.index');
    }
}
