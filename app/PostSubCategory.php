<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PostSubCategory extends Model
{
    //
    use SoftDeletes;

    protected $table = 'post_sub_categoies';

    protected $dates = ['deleted_at'];

    public function post_category()
    {
        return $this->belongsTo('App\PostCategory');
    }
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}
