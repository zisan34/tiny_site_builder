<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodMenu extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'food_menu';
    protected $dates = ['deleted_at'];

    public function category()
    {
    	return $this->belongsTo('App\FoodCategory', 'category_id');
    }
    public function meals()
    {
    	return $this->hasMany('App\MealChild', 'food_menu_id');
    }    
    public function used()
    {
		if($this->meals && count($this->meals)>0)
			return 1;

    	return 0;
    }
}
