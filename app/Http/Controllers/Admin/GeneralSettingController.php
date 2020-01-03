<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GeneralSetting;
use Auth;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $general_setting = GeneralSetting::latest()->first();
        return view('admin.website.settings.general.index', compact('general_setting'));
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
        $general_setting = new GeneralSetting;

        $general_setting->site_title = $request->site_title;
        $general_setting->tagline = $request->tagline;
        $general_setting->phy_address = $request->phy_address;
        $general_setting->site_address = $request->site_address;
        $general_setting->email_address = $request->email_address;
        $general_setting->created_by = Auth::id();

        $general_setting->save();
        return redirect()->route('general-settings.index');
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
        $general_setting = GeneralSetting::find($id);

        $general_setting->site_title = $request->site_title;
        $general_setting->tagline = $request->tagline;
        $general_setting->phy_address = $request->phy_address;
        $general_setting->site_address = $request->site_address;
        $general_setting->email_address = $request->email_address;
        $general_setting->updated_by = Auth::id();

        $general_setting->save();
        return redirect()->route('general-settings.index');
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
