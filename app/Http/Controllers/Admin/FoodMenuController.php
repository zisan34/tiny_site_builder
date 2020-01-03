<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use Auth;
use Toastr;
use App\FoodCategory;
use App\FoodMenu;
use DB;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $food_menus = FoodMenu::orderBy('menu_date', 'desc')->get();

        $food_menu_categories = FoodCategory::latest()->get();

        return view('admin.mess.food.index', compact('food_menus', 'food_menu_categories'));
    }



    public function get_filtered(Request $request)
    {
        // return $request;

        $food_menus = FoodMenu::where('category_id', $request->food_category)->where('menu_date', date('Y-m-d', strtotime($request->date)))->get();
        
        $user_id = $request->user_id;

        $food_menus = DB::table('food_menu AS fm')
            ->select('fm.*', 'mm.id AS meal_id', 'fm.id AS food_menu_id', 'mc.quantity', 'mc.id AS meal_child_id')
            ->leftJoin('meal_child AS mc',function($leftJoin){
                $leftJoin->on('fm.id', '=', 'mc.food_menu_id')->where('mc.deleted_at', NULL);

            })
            ->leftJoin('meal_master AS mm', function ($leftJoin) use($user_id) {
                $leftJoin->on('mc.meal_id', '=', 'mm.id')->where('mm.user_id', '=', "$user_id");
            })
            ->where('fm.category_id', '=', $request->food_category)
            ->where('fm.menu_date', date('Y-m-d', strtotime($request->date)))            
            ->orderBy('fm.name', 'asc')
            // ->toSql();
            ->get();
        // return $food_menus;

        if(count($food_menus)>0)
            return $food_menus;
        else
            return response()->json(['error' => 'No menus found!']);

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
        // return $request;

        if($request->food_menu_id)
        {
            $food_menu = FoodMenu::find($request->food_menu_id);
        }
        else
        {
            $food_menu = new FoodMenu;
        }

        $food_menu->name = $request->name;
        $food_menu->category_id = $request->category;
        $food_menu->price = $request->price;
        $food_menu->description = $request->description;
        $food_menu->menu_date = date('Y-m-d', strtotime($request->date));

        if ($request->hasFile('image')) 
        {
            $image = $request->image;
            $image_new = time() . '_' . Auth::id() . '_' . $image->getClientOriginalName();
            $image->move('uploads/images/food_menu', $image_new);
            $food_menu->picture = '/uploads/images/food_menu/' . $image_new;
        }
        $food_menu->save();

        return redirect()->route('food-menu.index');
    }


    public function entry(Request $request)
    {
        return $request;
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
        $food_menu = FoodMenu::find($id);

        return response()->json($food_menu);
    }

    public function viewData(Request $request)
    {        
        $food_menu = FoodMenu::find($request->id);

        return response()->json($food_menu);
    }

    public function toggleStatus(Request $request)
    {        
        $food_menu = FoodMenu::find($request->id);

        if($food_menu->status == 1 )
        {
            $food_menu->status = 0;

            $vals = array(
                'message' => 'Food Menu Deativated');
        }
        else if($food_menu->status == 0)
        {
            $food_menu->status = 1;

            $vals = array(
                'message' => 'Food Menu Activated');
        }

        $food_menu->save();
        echo json_encode($vals);
        exit();
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
        $food_menu = FoodMenu::find($id);
        if($food_menu->used() == 0)
        {
            $food_menu->deleted_by = Auth::id();
            $food_menu->save();
            $food_menu->delete();
            Toastr::success('Food Menu deleted successfully.');
        }
        Toastr::error('Food Menu is in use. Can not be deleted.');

        return redirect()->route('food-menu.index');
    }
}
