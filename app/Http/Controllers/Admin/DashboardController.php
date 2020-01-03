<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HeaderFooter;
use App\Quote;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $permissions = array(   ['name' => 'view all notes'],
                                ['name' => 'delete notes'],
                                ['name' => 'edit notes'],
                                ['name' => 'add draft categories'],
                                ['name' => 'edit draft categories'],
                                ['name' => 'delete draft categories'],
                                ['name' => 'view all draft categories'],

                                ['name' => 'add drafts'],
                                ['name' => 'edit drafts'],
                                ['name' => 'delete drafts'],
                                ['name' => 'view all drafts'],
                                ['name' => 'review drafts'],
                                ['name' => 'approve drafts'],


                                ['name' => 'add food menu category'],
                                ['name' => 'edit food menu category'],
                                ['name' => 'delete food menu category'],
                                ['name' => 'view all food menu category'],


                                ['name' => 'add food menu'],
                                ['name' => 'edit food menu'],
                                ['name' => 'delete food menu'],
                                ['name' => 'view all food menu'],

                                ['name' => 'view all meals'],

                                ['name' => 'view own meals'],

                                ['name' => 'meal entry'],

                                ['name' => 'confirm payment'],

                                ['name' => 'view meal reports'],


                                ['name' => 'add users'],
                                ['name' => 'edit users'],
                                ['name' => 'delete users'],
                                ['name' => 'view all users'],

                                ['name' => 'give permissions to user'],

                            );
        */
        // foreach ($permissions as $key => $permission) {
        //     $permission = Permission::create(['name' => $permission['name']]);
        // }
        // exit();

        // $role = Role::create(['name' => 'Editor']);
        // $role = Role::where('name', 'Admin')->latest()->first();
        // $role->givePermissionTo($permission);
        // $permissions = Permission::all();
        // return $permissions;
        // $role->syncPermissions($permissions);
        // return $role->permissions;

        


        // if(Auth::user()->hasRole('Admin'))
        // $user = Auth::user();

        // $roles = Role::all();

        // $user->syncRoles($roles);


        $users = User::where('id', '!=', Auth::id())->get();
        return view('admin.dashboard', compact('users'));
    }
    public function saveQuote(Request $request)
    {
        $this->validate($request, [
            'quote' => 'required'
        ]);
        $quote = new Quote;
        $quote->quote = $request->quote;
        $quote->created_by = Auth::id();
        $quote->save();
        return response()->json(['success'=>'Quote saved successfully.']);
    }
    public function getQuote()
    {
        $quote = Quote::latest()->first();
        return json_encode($quote);
    }
}
