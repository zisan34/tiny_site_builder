<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use \Carbon\Carbon;
use Auth;
use App\Draft;
use App\Draft_type;
use App\User;
use App\Branch;
use App\UserRole;
use Toastr;
class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $USER_ID = Auth::id();
        $admin_flag = Auth::user()->hasRole('Admin') ? 1 : 0;

        $drafts = Draft::orderBy('updated_at', 'desc')
            ->when($admin_flag != 1, function($query) use ($USER_ID) {
                return $query->where('created_by', $USER_ID)->orWhere('assigned_to', "$USER_ID");
            })
            ->get();

        $branches = Branch::all();

        return view('admin.drafts.index', compact('drafts','branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $draft_types = Draft_type::where('parent_id', NULL)->orderBy('updated_at', 'desc')->get();
        $draft_types = Draft_type::all()->sortBy("id");
        // $users= User::all();
        // review drafts        
        $users =  User::permission('review drafts')->get();
        $branches = Branch::all();
        return view('admin.drafts.create',compact('draft_types', 'users', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'version_number' => 'required',
            'draft_type' => 'required',
            'sent_to' => 'required',
            'file_type' => 'required',
            'draft_title' => 'required',
            'draft_details' => 'nullable|string',
            'file_upload' => 'nullable|mimes:pdf',
            'draft_date' => 'required',
            'draft_ref' => 'required',
            'volume_no' => 'required',
            'branch_code' => 'required',
        ]);
        $draft = new Draft;
        $draft->version_number = $request->version_number;
        $draft->volume_no = $request->volume_no;
        $draft->assigned_to = implode(', ', $request->sent_to);
        $draft->branch_id = $request->branch_code;
        $draft->draft_type_id = $request->draft_type;
        $draft->draft_title = $request->draft_title;
        $draft->created_by = Auth::id();

        $draft_date = Carbon::parse($request->draft_date);
        $draft->date = $draft_date;

        if(isset(Draft::latest()->first()->id))
        {
            $latest_id = Draft::latest()->first()->id;
        }
        else
        {
            $latest_id = 0;
        }
        $request->draft_ref = str_replace("---", $latest_id+1, $request->draft_ref);
        $draft->reference = $request->draft_ref;


        $draft->file_type = $request->file_type;

        if ($request->file_type == 1) 
        {
            //
            $rp_string = "<?xml encoding='utf-8' ?>";
            $draft_details = str_replace($rp_string, "", $request->draft_details);
            $dom = new \DomDocument();
            // $dom->loadHtml($rp_string . $draft_details);
            $dom->loadHtml( mb_convert_encoding($draft_details, 'HTML-ENTITIES', "UTF-8"));
            $images = $dom->getElementsByTagName('img');
            foreach($images as $img)
            {
                $src = $img->getAttribute('src');                
                // if the img source is 'data-url'
                if(preg_match('/data:image/', $src)){
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];                    
                    // Generating a random filename
                    $filename = uniqid();
                    // $filepath = "/images/$filename.$mimetype";
                    $filepath = "uploads/drafts/images/".$filename . '.' . $mimetype;        
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));                    
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            }
            $draft_details =  $dom->saveHTML();
            $draft->draft_details =  $draft_details;
        }
        else if($request->file_type == 2)
        {
            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/drafts/files', $content_new);
            }
            $draft->draft_details = '/uploads/drafts/files/' . $content_new;
        }

        // $draft->assigned_to = implode(', ', $request->sent_to);


        $draft->save();

        if(count($request->sent_to) > 0)
        {
            foreach ($request->sent_to as $reciever) 
            {
                $new_draft = new Draft;
                $new_draft->volume_no       = $draft->volume_no;   
                $new_draft->draft_type_id   = $draft->draft_type_id;
                $new_draft->draft_title     = $draft->draft_title;
                $new_draft->file_type       = $draft->file_type;
                $new_draft->draft_details   = $draft->draft_details;
                $new_draft->date            = $draft->date;
                $new_draft->reference       = $draft->reference;
                $new_draft->branch_id       = $draft->branch_id;
                $new_draft->assigned_to     = $reciever;
                $new_draft->version_number  = $draft->version_number + 1;
                $new_draft->created_by      = $draft->created_by;
                $new_draft->save();
            }
        }

        $users = User::find($request->sent_to);
        $draft->users()->attach($users);
        Toastr::success('Draft Created Successfully');
        return redirect()->route('drafts.index');
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
    public function review(Request $request)
    {
        $draft = Draft::find($request->id);
        if ($draft->assigned_to == Auth::id())
        {
            $draft->process_status = $draft->process_status + 1;
            $draft->save();

            if(isset($request->sent_to))
            {
                if(count($request->sent_to) > 0)
                {
                    foreach ($request->sent_to as $reciever) 
                    {
                        $new_draft = new Draft;
                        $new_draft->volume_no       = $draft->volume_no;   
                        $new_draft->draft_type_id   = $draft->draft_type_id;
                        $new_draft->draft_title     = $draft->draft_title;
                        $new_draft->file_type       = $draft->file_type;
                        $new_draft->draft_details   = $draft->draft_details;
                        $new_draft->date            = $draft->date;
                        $new_draft->reference       = $draft->reference;
                        $new_draft->branch_id       = $draft->branch_id;
                        $new_draft->assigned_to     = $reciever;
                        $new_draft->version_number  = $draft->version_number + 1;
                        $new_draft->created_by      = $draft->created_by;
                        $new_draft->process_status  = 1;
                        $new_draft->save();
                    }
                }
                else
                {
                    Toastr::error('Invalid Request');
                }
            }
            else
            {
                if(Auth::user()->can('approve drafts'))
                {
                    $new_draft = new Draft;
                    $new_draft->volume_no       = $draft->volume_no;   
                    $new_draft->draft_type_id   = $draft->draft_type_id;
                    $new_draft->draft_title     = $draft->draft_title;
                    $new_draft->file_type       = $draft->file_type;
                    $new_draft->draft_details   = $draft->draft_details;
                    $new_draft->date            = $draft->date;
                    $new_draft->reference       = $draft->reference;
                    $new_draft->branch_id       = $draft->branch_id;
                    $new_draft->assigned_to     = $draft->created_by;
                    $new_draft->version_number  = $draft->version_number + 1;
                    $new_draft->created_by      = $draft->created_by;
                    $new_draft->process_status  = 2;
                    $new_draft->save();
                }
                else
                {
                    Toastr::error('Invalid Request');
                }               
            }
            Toastr::success('Draft Reviewed Successfully');
            return redirect()->route('drafts.index');
        }
        else
        {
            Toastr::error('You are not authorized to do this');
            return redirect()->back();
        }
    }
    public function viewData(Request $request)
    {
        $draft = Draft::find($request->id);
        // return json_encode($page);
        if($draft->assigned_to == Auth::id());
        {
            $users =  User::permission('approve drafts')->get();
        }
        
        $vals = array(
            'id' => $draft->id,
            'title' => $draft->draft_title,
            'content' => $draft->draft_details,
            'users' => $users,
            'ref_no' => $draft->reference,
            'vol_no' => $draft->volume_no,
            'branch' => $draft->branch->name,
            'status' => $draft->process_stat()
        );




        $vals = json_encode($vals);

        echo $vals;
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
        $draft_types = Draft_type::all()->sortBy("id");
        $users = User::all();
        $branches = Branch::all();
        $draft = Draft::findOrFail($id);

        if($draft->assigned_to == Auth::id());
        {
            $users =  User::permission('approve drafts')->get();
        }

        return view('admin.drafts.edit',compact('draft', 'draft_types', 'users', 'branches'));
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
        $this->validate($request,[
            'version_number'    => 'required',
            'draft_type'        => 'required',
            'sent_to'           => 'required',
            'file_type'         => 'required',
            'draft_title'       => 'required',
            'draft_details'     => 'nullable|string',
            'file_upload'       => 'nullable|mimes:pdf',
            'draft_date'        => 'required',
            'draft_ref'         => 'required',
            'volume_no'         => 'required',
            'branch_code'       => 'required',
        ]);

        $draft = Draft::find($id);

        $draft->version_number = $request->version_number;
        $draft->reference = $request->draft_ref;
        $draft->assigned_to = implode(', ', $request->sent_to);
        $draft->volume_no = $request->volume_no;
        $draft->branch_id = $request->branch_code;
        $draft->draft_type_id = $request->draft_type;
        $draft->draft_title = $request->draft_title;
        $draft->updated_by = Auth::id();

        $draft_date = Carbon::parse($request->draft_date);
        $draft->date = $draft_date;

        $draft->file_type = $request->file_type;

        if ($request->file_type == 1) 
        {
            //
            $rp_string = "<?xml encoding='utf-8' ?>";
            $draft_details = str_replace($rp_string, "", $request->draft_details);
            $dom = new \DomDocument();
            // $dom->loadHtml($rp_string . $draft_details);
            $dom->loadHtml( mb_convert_encoding($draft_details, 'HTML-ENTITIES', "UTF-8"));
            $images = $dom->getElementsByTagName('img');

            foreach ($images as $img)
            {
                $src = $img->getAttribute('src');                
                // if the img source is 'data-url'
                if (preg_match('/data:image/', $src)) {
                    // get the mimetype
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                    $mimetype = $groups['mime'];
                    // Generating a random filename
                    $filename = uniqid();
                    // $filepath = "/images/$filename.$mimetype";
                    $filepath = "uploads/drafts/images/".$filename . '.' . $mimetype;        
                    // @see http://image.intervention.io/api/
                    $image = Image::make($src)
                      // resize if required
                      /* ->resize(300, 200) */
                      ->encode($mimetype, 100)  // encode file to the specified mimetype
                      ->save(public_path($filepath));
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                } // <!--endif
            }
            $draft_details =  $dom->saveHTML();
            $draft->draft_details =  $draft_details;
        }
        else if($request->file_type == 2)
        {
            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/drafts/files', $content_new);
            }
            $draft->draft_details = '/uploads/drafts/files/' . $content_new;
        }

        // $draft->assigned_to = implode(', ', $request->sent_to);


        // echo "<pre>";
        // print_r($request->all());
        // return;
        $draft->save();

        $users = User::find($request->sent_to);
        $draft->users()->sync($users);
        
        Toastr::success('Draft Updated Successfully');

        return redirect()->route('drafts.index');
    }
    public function toogleStatus(Request $request)
    {
        $draft = Draft::find($request->id);

        if($draft->status == 1 )
        {
            $draft->status = 0;

            $vals = array(
                'message' => 'Draft Deactivated');

        }
        else if($draft->status == 0)
        {
            $draft->status = 1;

            $vals = array(
                'message' => 'Draft Activated');

        }
        $draft->save();
        json_encode($vals);
        echo json_encode($vals);
        exit();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $draft = Draft::find($id);
        $draft->deleted_by = Auth::id();
        $draft->save();
        $draft->delete();
        Toastr::success('Draft Deleted Successfully');        
        return redirect()->back();
    }
}
