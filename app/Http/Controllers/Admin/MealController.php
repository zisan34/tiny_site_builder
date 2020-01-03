<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Toastr;
use DB;
use App\User;
use App\Meal;
use App\MealChild;
use App\FoodMenu;
use App\FoodCategory;
use App\UserTransaction;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $start = date('Y-m-01');
        // $end = date('Y-m-t');

        // return count(Auth::user()->meals->whereBetween('meal_date',  [$start, $end]));

        if(Auth::user()->hasRole('Mess Member'))
        {
            $users = User::where('id', Auth::id())->get();
        }
        else
        {
            $users = User::orderBy('name')->get();
        }


        return view('admin.mess.meals.index', compact('users'));


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


    public function entry($user_id)
    {
        $user = User::find($user_id);
        $food_menus = FoodMenu::where('status', 1)->latest()->get();
        $food_menu_categories = FoodCategory::all();

        return view('admin.mess.meals.entry', compact('food_menus', 'user', 'food_menu_categories'));
    }

    public function get_food_menu(Request $request)
    {
        $food_menus = FoodMenu::where('category_id', $request->category_id)->get();
        return $food_menus;
    }
    public function insert(Request $request)
    {
        // return $request;
        return $this->store($request);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $meal_date = date('Y-m-d', strtotime($request->meal_date));

        $meal_id = 0;
        if($request->meal_id > 0)
        {
            $meal = Meal::find($request->meal_id);
            $meal_id = $meal->meal_id;
            $out_transaction = UserTransaction::where('reference', $meal->meal_id)->first();
        }
        else
        {
            $meal = new Meal;
            $out_transaction = new UserTransaction;
            $meal_seq_count = Meal::withTrashed()->latest()->first();
            $meal_id = isset($meal_seq_count) ? "ML-" .($meal_seq_count->id + 1) :  "ML-" . 1;
            $meal->meal_id = $meal_id;
            $meal->user_id = $request->user;
            $meal->meal_date = $meal_date;
            $meal->meal_type = $request->meal_type;
            $meal->created_by = Auth::id();

        }

        $meal->paid_amount = $request->paid_amt ? $request->paid_amt : 0;
        $meal->total_price = $request->total_amt ? $request->total_amt : 0;

        $total_menus_count = 0;
        foreach ($request->quantity as $i => $qty)
        {
            if ($request->quantity[$i] > 0)
            {
                $total_menus_count++;
            }
        }        
        $meal->total_menus = $total_menus_count;

        if($total_menus_count > 0)
        $meal->save();


        foreach ($request->food_menus as $key => $value)
        {

            if ($request->meal_child_id[$key] > 0)
            {
                if ($request->quantity[$key] > 0)
                {
                    // update
                    $meal_child = MealChild::find($request->meal_child_id[$key]);
                    $meal_child->meal_id = $meal->id;
                    $meal_child->food_menu_id = $request->food_menus[$key];
                    $meal_child->note = $request->note[$key];
                    $meal_child->quantity = $request->quantity[$key];
                    $meal_child->created_by = Auth::id();

                    $meal_child->save();
                } 
                else 
                {
                    // delete
                    $meal_child = MealChild::find($request->meal_child_id[$key]);
                    $meal_child->deleted_by = Auth::id();
                    $meal_child->save();
                    $meal_child->delete();
                }
            } 
            else 
            {

                if ($request->quantity[$key] > 0) 
                {
                    // Insert
                    $meal_child = new MealChild;
                    $meal_child->meal_id = $meal->id;
                    $meal_child->food_menu_id = $request->food_menus[$key];
                    $meal_child->note = $request->note[$key];
                    $meal_child->quantity = $request->quantity[$key];
                    $meal_child->created_by = Auth::id();

                    $meal_child->save();
                }

            }

        }

        //``user_id``transaction_type``amount``reference``note``
        $out_transaction->user_id = $request->user;
        $out_transaction->transaction_type = 2;
        $out_transaction->confimation = 1;
        $out_transaction->transaction_date = $meal_date;
        $out_transaction->amount = -$request->total_amt;
        $out_transaction->reference = $meal_id;
        $out_transaction->note = "Meal Cost";
        $out_transaction->created_by = Auth::id();
        $out_transaction->save();

        if($request->paid_amt)
        {
            $in_transaction = new UserTransaction;
            $in_transaction->user_id = $request->user;
            $in_transaction->transaction_type = 1;
            $in_transaction->confimation = 1;
            $in_transaction->transaction_date = $meal_date;
            $in_transaction->amount = $request->paid_amt;
            $in_transaction->reference = $meal_id;
            $in_transaction->note = "Meal Payment";
            $in_transaction->created_by = Auth::id();
            $in_transaction->save();                
        }
        Toastr::success('Entry successfull');

        if(count($meal->meal_children) < 1)
        {
            $found_meal = Meal::find($request->meal_id);
            $found_transaction = UserTransaction::where('reference', $request->meal_id)->first();

            if($found_meal)
            {
                $found_meal->deleted_by = Auth::id();
                $found_meal->save();
                $found_meal->delete();
            }

            if($found_transaction)
            {
                $found_transaction->deleted_by = Auth::id();
                $found_transaction->save();
                $found_transaction->delete();
            }
        }
        
        if($request->entry_from == "meal_calendar")
        {
            return redirect()->back();
        }
        return redirect()->route('meals.index');

    }

    public function meal_calendar()
    {
        $users = User::all();

        $food_categories = FoodCategory::all();

        return view('admin.mess.food.meal_calendar', compact('users', 'food_categories'));
    }

    public function user_meal_calendar(Request $request)
    {
        // return $request;
        $users = User::all();

        if($request->user > 0)
        {
            $food_categories = FoodCategory::all();
            $user = User::find($request->user);
            $user_meals = DB::table('user_meal_type_vw')
                            ->select(DB::raw('*'))
                                         ->where('name', $user->name)
                                         ->orderBy('meal_date')
                                         ->get();
        // return $user_meals;
        }
        else
        {
            $food_categories = FoodCategory::all();
            $user = User::find($request->user);
            $user_meals = DB::table('user_meal_type_vw')
                            ->select(DB::raw('*'))
                                         ->orderBy('meal_date')
                                         ->get();

        }
        return view('admin.mess.food.meal_calendar', compact('users', 'user_meals', 'food_categories'));
    }

    public function make_payment(Request $request)
    {
        // return $request;

        // user_id
        // transaction_type
        // amount
        // reference
        // note

        // "user_id": null,
        // "pay_date": "02-12-2019",
        // "due_amount": null,
        // "payment_amount": "500",
        // "reference": "Bkash - Ref"

        $transaction = new UserTransaction;
        $transaction->user_id = $request->user_id;
        $transaction->transaction_type = 1;
        $transaction->confimation = 0;
        $transaction->transaction_date = date('Y-m-d');
        $transaction->amount = $request->payment_amount;
        $transaction->reference = $request->reference;
        $transaction->note = "Meal Cost";
        $transaction->created_by = Auth::id();
        $transaction->save();

        Toastr::success('Payment request sent for confirmation!');

        return redirect()->route('meals.index');
    }



    public function meal_budget(Request $request)
    {

        return view('admin.mess.meals.reports.meal_budget');        
    }

    public function meal_budget_print(Request $request)
    {
        return view('admin.mess.meals.reports.meal_budget_print');        
    }



    public function meal_report(Request $request)
    {

        $users = User::orderBy('name')->get();

        return view('admin.mess.meals.reports.meal_report', compact('users'));


    }

    public function meal_report_print(Request $request)
    {

        $users = User::orderBy('name')->get();
        $start = $request->start;
        $end = $request->end;

        return view('admin.mess.meals.reports.meal_report_print', compact('users', 'start', 'end'));
        

    }

    public function user_meal_report_print(Request $request)
    {
        # code...
        $user = User::find($request->user_id);
        $meals = $user->meals->whereBetween('meal_date',  [$request->start, $request->end]);
        $start = $request->start;
        $end = $request->end;
        return view('admin.mess.meals.reports.user_meals_report_print', compact('user', 'meals', 'start', 'end'));

    }

    public function user_meal_report(Request $request)
    {
        # code...
        $users = User::orderBy('name')->get();
        if(Auth::user()->hasRole("Mess Member"))
            $users = User::where('id', Auth::id())->get();
        if(isset($request->user_id))
        {
            // return 1;
            $user = User::find($request->user_id);
            $start = date('Y-m-d', strtotime($request->start));
            $end = date('Y-m-d', strtotime($request->end));
            $meals = $user->meals->whereBetween('meal_date',  [$start, $end]);
            if(isset($meals) && count($meals)>0)
            {
                return view('admin.mess.meals.reports.user_meals_report', compact('user', 'meals', 'start', 'end', 'users'));
            }
            else
            {
                $msg = 'No Data Found!';
                return view('admin.mess.meals.reports.user_meals_report', compact('msg', 'users'));
            }
        }
        else
        {
            return view('admin.mess.meals.reports.user_meals_report', compact('users'));
        }

    }

    public function viewData(Request $request)
    {
        //user_id: "1", start: "2019-12-01", end: "2019-12-31"
        $user = User::find($request->user_id);

        if($request->start && $request->end && $request->meal_type)
        {
            $meals = $user->meals->whereBetween('meal_date',  [$request->start, $request->end])->where('meal_type', $request->meal_type);
        }
        elseif($request->start && $request->end)
        {
            $meals = $user->meals->whereBetween('meal_date',  [$request->start, $request->end]);
        }
        else
        {
            $meals = $user->meals;
        }


        $meal_children = array();

        foreach ($meals as $meal) {
            foreach ($meal->meal_children as $key => $meal_child) {
                $meal_child->setAttribute('item_name', $meal_child->item->name);
                array_push($meal_children, $meal_child);
            }
        }

        $vals = array(
            'user_id' => $user->user_id,
            'user_name' => $user->name,
            'meals' => $meals,
            'meal_children' => $meal_children
        );

        return json_encode($vals);
        exit();
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
