<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Toastr;

class UserAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function user_permissions($id)
    {
        $permissions = Permission::all();

        $user = User::find($id);

        // $menus = DB::table('menus AS m')
        //     ->leftJoin('modules AS mdl', 'm.module_id', '=', 'mdl.id')
        //     ->leftJoin('users_menus AS um', 'm.id', '=', 'um.menu_id')
        //     ->where('um.user_id', '=', $id)
        //     ->select('m.*', 'mdl.module_name', 'um.object_id')
        //     ->orderBy('m.menu_name', 'asc')
        //     // ->toSql();
        //     ->get();
        //    // dd($menus);

        // return $menus;
        return view('admin.users.user-access', compact('permissions', 'user'));
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
        $user = User::find($request->user_id);
        $user->syncPermissions($request->permission);
        Toastr::success('Permissions updated successfully');
        return redirect()->back();

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
    }
}
