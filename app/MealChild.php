<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealChild extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'meal_child';
    protected $dates = ['deleted_at'];

    public function item()
    {
        return $this->belongsTo('App\FoodMenu', 'food_menu_id');
    }
    
}
