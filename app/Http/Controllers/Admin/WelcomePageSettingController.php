<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Toastr;

use App\WelcomePageSetting;
use App\Page;
use App\PostCategory;

class WelcomePageSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::all();
        $postcategories = PostCategory::all();
        $welcome_settings = WelcomePageSetting::latest()->first();
        return view('admin.website.settings.welcome_page.index', compact('welcome_settings', 'pages', 'postcategories'));
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
        // "welcome_page
        // "welcome_cats
        // "disp_m_sliders
        // "disp_photo
        // "disp_vdo
        //welcome_page_id  welcome_cats  enable_middle_sliders  enable_recent_video  enable_recent_images
        // return $request;

        $welcome_settings = new WelcomePageSetting;
        $welcome_settings->welcome_page_id = $request->welcome_page ? $request->welcome_page : Page::latest()->first()->id;
        $welcome_settings->welcome_cats = implode(',', $request->welcome_cats);
        $welcome_settings->enable_middle_sliders = $request->disp_m_sliders ? ($request->disp_m_sliders == 'on' ? 1 : 0) : 0;
        $welcome_settings->enable_top_sliders = $request->disp_t_sliders ? ($request->disp_t_sliders == 'on' ? 1 : 0) : 0;
        $welcome_settings->enable_recent_images = $request->disp_vdo ? ($request->disp_vdo == 'on' ? 1 : 0) : 0;
        $welcome_settings->enable_recent_video = $request->disp_photo ? ($request->disp_photo == 'on' ? 1 : 0) : 0;

        $welcome_settings->created_by = Auth::id();

        $welcome_settings->save();

        Toastr::success('Save successful!');

        return redirect()->route('welcome-settings.index');
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
