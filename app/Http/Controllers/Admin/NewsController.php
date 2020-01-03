<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;
use \Carbon\Carbon;
use Auth;
use Session;
use Toastr;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $all_news=News::all();
        return view('admin.website.news.index')->with( 'all_news' , News::orderBy('updated_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.website.news.create')->with('news_categories',NewsCategory::all());

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
            'news_date' => 'required', 
            'news_category' => 'required', 
            'news_title' => 'required', 
            'content_type' => 'required', 
            'details' => 'nullable|string', 
            'file_upload' => 'nullable|mimes:pdf|max:10000', 
        ]);
        $publish_date = Carbon::parse($request->news_date);

        $news = new News;
        $news->user_id = Auth::id();
        $news->publish_date = $publish_date;
        $news->news_category_id = $request->news_category;
        $news->title = $request->news_title;
        $news->type = $request->content_type;



        if ($request->content_type == 1) 
        {
            $details = $request->details;
            $dom = new \DomDocument();
            $dom->loadHtml('<?xml encoding="utf-8" ?>' . $details, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $details =  $dom->saveHTML();
            $news->content =  $details;
        }
        // if ($request->content_type == 1) {
        //     $news->content = $request->details;
        // }
        else if($request->content_type == 2)
        {
            // $news->content = $request->file_upload;

            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $news->content = '/uploads/files/' . $content_new;
            }
        }
        $news->save();

        Toastr::success('News Created Successfully');

        return redirect()->route('news.index');


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
        $news = News::find($request->id);

        $vals = array(
            'title' => $news->title,
            'category' => $news->news_category->title,
            'content' => $news->content
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
        //
        $news = News::find($id);

        $news_categories = NewsCategory::all();

        return view('admin.website.news.edit',compact('news' , 'news_categories'));
    }

    public function toogleStatus($id)
    {
        $news = News::find($id);

        if($news->status == 1 )
        {
            $news->status = 0;
            Toastr::error('News Inactivated');
        }
        else if($news->status == 0)
        {
            $news->status = 1;
            Toastr::success('News Activated');

        }

        $news->save();
        
        return redirect()->route('news.index');
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
            'news_date' => 'required', 
            'news_category' => 'required', 
            'news_title' => 'required', 
            'file_type' => 'required', 
            'news_details' => 'nullable|string', 
            'file_upload' => 'nullable|mimes:pdf|max:10000', 
        ]);

        $publish_date = Carbon::parse($request->news_date);

        $news = News::find($id);
        $news->updated_by = Auth::id();
        $news->publish_date = $publish_date;
        $news->news_category_id = $request->news_category;
        $news->title = $request->news_title;
        $news->type = $request->file_type;


        if(file_exists(public_path($news->content)))
        {

          unlink(public_path($news->content));

        }

        
        if ($request->file_type == 1) {
            $news_details = str_replace('<!--?xml encoding="utf-8" ?-->', "", $request->news_details);
            $dom = new \DomDocument();
            $dom->loadHtml('<?xml encoding="utf-8" ?>' . $news_details, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $news_details =  $dom->saveHTML();
            $news->content =  $news_details;
        }
        else if($request->file_type == 2)
        {
            

            if ($request->hasFile('file_upload')) 
            {                
                $content = $request->file_upload;
                $content_new = time() . '_' . Auth::id() . '_' . $content->getClientOriginalName();
                $content->move('uploads/files', $content_new);
                $news->content = '/uploads/files/' . $content_new;
            }
        }

        $news->save();

        Toastr::success('News Updated Successfully');


        return redirect()->route('news.index');
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
        $news=News::find($id);

        $news->deleted_by = Auth::id();

        $news->save();

        $news->delete();

        Toastr::error('Successfully deleted the News!');
        
        return redirect()->route('news.index');
    }
}
