<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\MemberCategory;
use Auth;
use Toastr;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::orderBy('order', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('admin.website.members.index', compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = MemberCategory::where('parent_id', '=', NULL)->get();
        return view('admin.website.members.create', compact('categories'));
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
            'name' => 'required|string',
            'designation' => 'required|string',
        ]);

        $member = new Member;

        $member->name = $request->name;
        $member->designation = $request->designation;

        $member_info = $request->info;
        $rp_string = "<?xml encoding='utf-8' ?>";
        $dom = new \DomDocument();
        $dom->loadHtml($rp_string . $member_info);
        $member_info =  $dom->saveHTML();
        $member->info =  $member_info;

        $member->order = $request->order;
        $member->created_by = Auth::id();


        if(strpos($request->member_category,'|'))
        {
            $cat = explode('|',$request->member_category);
            $member->category_id = $cat[0];
            $member->subcategory_id = $cat[1];

        }
        else
        {
            $member->category_id = $request->member_category;
            
        }

        if ($request->hasFile('image')) 
        {
            $image = $request->image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $member->image = '/uploads/images/' . $image_new;
        }
        $member->save();
        return redirect()->route('members.index');
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

    public function viewData(Request $request)
    {
        $member = Member::find($request->id);
        $vals = array(
            'title' => $member->name,
            'category' => $member->designation,
            'content' => $member->info,
            'image' => $member->image
        );

        $vals = json_encode($vals);

        echo $vals;
        exit();
    }
    public function toogleStatus(Request $request)
    {
        $member = Member::find($request->id);

        if($member->status == 1 )
        {
            $member->status = 0;

            $vals = array(
                'message' => 'Member Deativated');
        }
        else if($member->status == 0)
        {
            $member->status = 1;

            $vals = array(
                'message' => 'Member Activated');
        }

        $member->save();
        echo json_encode($vals);
        exit();
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
        $categories = MemberCategory::all();
        $member = Member::find($id);
        return view('admin.website.members.edit', compact('categories', 'member'));
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
        $member = Member::find($id);
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->order = $request->order;
        $member->updated_by = Auth::id();


        if(strpos($request->member_category,'|'))
        {
            $cat = explode('|',$request->member_category);
            $member->category_id = $cat[0];
            $member->subcategory_id = $cat[1];

        }
        else
        {
            $member->category_id = $request->member_category;
            
        }
        $member_info = $request->info;
        $dom = new \DomDocument();
        $rp_string = "<?xml encoding='utf-8' ?>";
        $dom->loadHtml($rp_string . $member_info);
        $member_info =  $dom->saveHTML();
        $member->info =  $member_info;

        if ($request->hasFile('image')) 
        {
            $image = $request->image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new);
            $member->image = '/uploads/images/' . $image_new;
        }

        $member->save();
        return redirect()->route('members.index');
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
        $member = Member::find($id);

        $member->deleted_by = Auth::id();

        $member->save();

        $member->delete();

        Toastr::error('Successfully deleted the Member!');

        return redirect()->route('members.index');

    }
}
