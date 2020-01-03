<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodCategory extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'food_category';
    protected $dates = ['deleted_at'];

    public function food_menus()
    {
    	return $this->hasMany('App\FoodMenu', 'category_id');
    }
    public function used()
    {
    	if($this->food_menus)
    	{
    		foreach ($this->food_menus as $key => $food_menu) 
    		{
    			if($food_menu->meals && count($food_menu->meals)>0)
    				return 1;
    		}
    	}
    	return 0;
    }
}
