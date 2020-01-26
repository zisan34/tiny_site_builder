<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use Auth;
use Session;
use App\SubMenu;
use App\Post;
use App\Page;
use App\PostCategory;
use App\Album;
use DB;
use Toastr;
class MenuController extends Controller
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
        $onlyMenus = Menu::where( 'parent_id' , '=' , NULL)->orderBy('order','asc')->get();

        return view('admin.website.settings.menus.index')
                    ->with('menus', $onlyMenus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menus = Menu::all();

        return view('admin.website.settings.menus.create',compact('menus'));
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
        // return $request;
        $menu = new Menu;
        $menu->name = $request->navigation_label;
        $menu->relational_type = $request->menu_from;
        $menu->location = $request->menu_location;
        $menu->parent_id = $request->parent_menu;
        $menu->relational_id = $request->relational_menu;
        $menu->title_attribute = $request->title_attribute;
        $menu->link = $request->menu_link;
        $menu->created_by = Auth::id();

        if(isset($request->parent_menu))
        {
            $parent = Menu::find($request->parent_menu);
            $parent_level = $parent->level;
            $menu->level = $parent_level + 1;
        }

        if($request->menu_order > 0)
        {
            $menu->order = $request->menu_order;
        }

        $menu->save();

        Toastr::success('Menu Added Successfully');

        return redirect()->route('menus.index');
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

    public function getMenus(Request $request)
    {
        if($request->menu_type == "posts")
        {
            $posts = Post::all();

            echo $posts;
        }
        else if($request->menu_type == "pages")
        {
            $pages = Page::all();

            echo $pages;
        }
        else if($request->menu_type == "post_category")
        {
            $post_categories = PostCategory::all();

            echo $post_categories;
        }
        else if($request->menu_type == "photo_album")
        {
            $photo_albums = Album::all();

            echo $photo_albums;
        }
        else
        {
            echo "invalid";
        }
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
        $menu = Menu::find($id);
        $menus = Menu::all();

        if($menu->relational_type == "posts")
        {
            $relational_menus = Post::all();
        }
        else
        {
            $relational_menus = Page::all();
        }
        return view('admin.website.settings.menus.edit', compact('menu', 'menus', 'relational_menus'));
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
        $menu = Menu::find($id);
        $menu->name = $request->navigation_label;
        $menu->relational_type = $request->menu_from;
        $menu->location = $request->menu_location;
        $menu->parent_id = $request->parent_menu;
        $menu->relational_id = $request->relational_menu;
        $menu->title_attribute = $request->title_attribute;
        $menu->link = $request->menu_link;

        if($request->menu_order > 0)
        {
            $menu->order = $request->menu_order;
        }

        if(isset($request->parent_menu))
        {
            $parent = Menu::find($request->parent_menu);
            $parent_level = $parent->level;
            $menu->level = $parent_level + 1;
        }


        $menu->updated_by = Auth::id();


        $menu->save();

        Toastr::success('Menu Updated Successfully');


        return redirect()->route('menus.index');
    }
    public function toogleStatus(Request $request)
    {
        $menu = Menu::find($request->id);

        if($menu->status == 1 )
        {
            $menu->status = 0;

            $vals = array(
                'message' => 'Menu Deactivated');


        }
        else if($menu->status == 0)
        {
            $menu->status = 1;

            $vals = array(
                'message' => 'Menu Activated');


        }

        $menu->save();
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
        //
        $menu = Menu::find($id);

        if(count($menu->submenus) == 0)
        {

            $menu->deleted_by = Auth::id();

            $menu->save();

            $menu->delete();

            Toastr::error('Menu Deleted');
        }
        else
        {
            Toastr::error('Menus with submenu can not be deleted' );
        }


        return redirect()->back();
    }
}
