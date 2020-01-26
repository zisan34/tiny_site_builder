<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HeaderFooter;
use Auth;
use Toastr;
class HeaderFooterController extends Controller
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
        return view('admin.website.themes.headerfooters.index')
                    ->with('headerfooter' , HeaderFooter::latest()->first());
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
        if($request->headerfooter_id)
        {
            $headerfooter = HeaderFooter::find($id);
            $headerfooter->updated_by = Auth::id();
        }
        else
        {
            $headerfooter = new HeaderFooter;
            $headerfooter->created_by = Auth::id();        
        }

        $headerfooter->title = $request->title;
        $headerfooter->subtitle = $request->subtitle;
        $headerfooter->developer = "Fazlul Kabir";
        $headerfooter->credit = "Fazlul Kabir";
        $headerfooter->welcome_message = $request->welcome_message;
        $headerfooter->save();

        Toastr::success('Header and Footer Updated Successfully');


        return redirect()->route('headerfooters.index');
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
    public function updateMessage(Request $request, $id)
    {
        $headerfooter = HeaderFooter::find($id);
        $headerfooter->welcome_message = $request->welcome_message;
        $headerfooter->updated_by = Auth::id();
        $headerfooter->save();
        Toastr::success('Header and Footer Updated Successfully');
        return redirect()->route('admin.dashboard');
        
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
        Toastr::error('Invalid Request');

        return redirect()->back();

    }
}
