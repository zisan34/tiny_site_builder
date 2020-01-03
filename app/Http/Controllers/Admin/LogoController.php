<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logo;
use Auth;
use Session;
use Toastr;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.website.themes.logos.index')
                    ->with('logo' , Logo::latest()->first());
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
        $this->validate($request,[
            'primary_logo' => 'nullable|mimes:jpg,jpeg,png|max:2500',
            'secondary_logo' => 'nullable|mimes:jpg,jpeg,png|max:2500'
        ]);

        if(!$request->primary_logo)
        {
            $this->validate($request,[
                'secondary_logo' => 'required|mimes:jpg,jpeg,png|max:2500',
            ]);
        }
        else
        {
            $this->validate($request,[
                'primary_logo' => 'required|mimes:jpg,jpeg,png|max:2500',
            ]);
        }
        if($request->logo_id)
        {
            $logo = Logo::find($request->logo_id);
        }
        else
        {
            $logo = new Logo;
        }

        if ($request->hasFile('primary_logo')) 
        {                
            $primary_logo = $request->primary_logo;
            $primary_logo_new = time() . '_' . Auth::id() . '_' . $primary_logo->getClientOriginalName();
            $primary_logo->move('uploads/logos', $primary_logo_new);
            $logo->primary = '/uploads/logos/' . $primary_logo_new;
        }        
        if ($request->hasFile('secondary_logo')) 
        {                
            $secondary_logo = $request->secondary_logo;
            $secondary_logo_new = time() . '_' . Auth::id() . '_' . $secondary_logo->getClientOriginalName();
            $secondary_logo->move('uploads/logos', $secondary_logo_new);
            $logo->secondary = '/uploads/logos/' . $secondary_logo_new;
        }

        $logo->created_by = Auth::id();

        $logo->save();

        Toastr::success('Logos Updated Successfully');


        return redirect()->route('logos.index');
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

    public function toogleStatus($id)
    {
        $logo = Logo::find($id);

        if($logo->status == 1 )
        {
            $logo->status = 0;
        }
        else if($logo->status == 0)
        {
            $logo->status = 1;
        }

        $logo->save();
        
        return redirect()->route('logos.index');
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
            'primary_logo' => 'nullable|mimes:jpg,jpeg,png|max:2500',
            'secondary_logo' => 'nullable|mimes:jpg,jpeg,png|max:2500'
        ]);

        $logo = Logo::latest()->first();

        if ($request->hasFile('primary_logo')) 
        {                
            $primary_logo = $request->primary_logo;
            $primary_logo_new = time() . '_' . Auth::id() . '_' . $primary_logo->getClientOriginalName();
            $primary_logo->move('uploads/logos', $primary_logo_new);
            $logo->primary = '/uploads/logos/' . $primary_logo_new;
        }        
        if ($request->hasFile('secondary_logo')) 
        {                
            $secondary_logo = $request->secondary_logo;
            $secondary_logo_new = time() . '_' . Auth::id() . '_' . $secondary_logo->getClientOriginalName();
            $secondary_logo->move('uploads/logos', $secondary_logo_new);
            $logo->secondary = '/uploads/logos/' . $secondary_logo_new;
        }

        $logo->updated_by = Auth::id();

        $logo->save();

        Toastr::success('Logos Updated Successfully');


        return redirect()->route('logos.index');
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
