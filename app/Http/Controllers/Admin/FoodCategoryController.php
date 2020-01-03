<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\FoodCategory;
use App\FoodMenu;
use Auth;

class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $food_category = FoodCategory::all();
            return DataTables::of($food_category)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn bg-purple btn-xs edit editCategory"><i class="fa fa-pencil"></i></a>';
                    if($row->used() == 0)
                    {
                        $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-xs deleteCategory"><i class="fa fa-trash"></i></a>';
                    }
                    else
                    {
                        $btn .= ' <a href="#" disabled class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>';
                    }
    
                    return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.mess.food.category');
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
        $this->validate($request, [
            'name' => 'required',
            'short_name' => 'required'
        ]);

        $user_id = Auth::id();
        if($request->category_id)
        {
            $food_category = FoodCategory::find($request->category_id);
        }
        else
        {
            $food_category = new FoodCategory;
        }

        $food_category->name = $request->name;
        $food_category->short_name = $request->short_name;
        $food_category->description = $request->description;
        $food_category->created_by = Auth::id();
        $food_category->save();

        return response()->json(['success'=>'Food Category saved successfully.']);
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
        $category = FoodCategory::find($id);

        return response()->json($category);
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
        $category = FoodCategory::find($id);

        if($category->used() == 0)
        {
            $category->deleted_by = Auth::id();

            $food_menus = FoodMenu::where('category_id', $category->id)->get();

            foreach ($food_menus as $key => $food_menu)
            {
                $food_menu->deleted_by = Auth::id();
                $food_menu->save();
                $food_menu->delete();
            }

            $category->save();
            $category->delete();
            return response()->json(['success'=>'Food Category deleted successfully.']);
            exit();
        }
        return response()->json(['error'=>'Food Category is used. Can not be deleted.']);
        exit();
    
        
    }
}
