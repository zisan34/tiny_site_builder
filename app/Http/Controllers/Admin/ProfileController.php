<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Toastr;
use App\Profile;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.users.profile.profile');

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
    public function update(Request $request)
    {
        //name
        //email
        //password
        //password_confirmation
        //dob
        //gender
        //gender
        //facebook
        //twitter
        //country
        //city
        //address
        //phone
        //image
        //instagram
        //youtube
        //bio

        $this->validate($request,[
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if($request->email != Auth::user()->email)
        {
            $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users'
            ]);
        }

        $dob=\Carbon\Carbon::parse($request->dob)->format('Y-m-d');
//        return $dob;
        $user = Auth::user();
        $user->email = $request->email;
        $user->name = $request->name;

        if($request->password)
        {
            $user->password = Hash::make($request->password);
        }
        $user->updated_by = Auth::id();
        $user->save();

        if(Auth::User()->profile)
        {
            $profile = Auth::User()->profile;
        }
        else
        {
            $profile = new Profile;
            $profile->user_id = Auth::id();
        }
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->bio = $request->bio;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->instagram = $request->instagram;
        $profile->youtube = $request->youtube;

        $profile->dob = $dob;


        if ($request->hasFile('image')) 
        {
            $image = $request->image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/profile', $image_new);
            $profile->image = '/uploads/profile/' . $image_new;
        }
        $profile->save();

        Toastr::success('Profile data updated successfully');
        return redirect()->route('profile');


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
