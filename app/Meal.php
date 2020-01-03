<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    //

    use SoftDeletes;
    
    protected $table = 'meal_master';
    protected $dates = ['deleted_at'];

    public function meal_children()
    {
    	return $this->hasMany('App\MealChild', 'meal_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
