<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    //
    use SoftDeletes;

    protected $table = 'post_categories';

    protected $dates = ['deleted_at'];

    public function subcategory_posts()
    {
        return $this->hasMany('App\Post', 'post_sub_category_id')->latest();
    }
    public function category_posts()
    {
        return $this->hasMany('App\Post', 'post_category_id')->latest();
    }
    public function limited_post()
    {
        return $this->hasMany('App\Post')->latest()->take(3);
    }
    public function post_subcategories()
    {
        return $this->hasMany('App\PostCategory', 'parent_id')->orderBy('order','asc');
    }
    public function parent_category()
    {
        return $this->belongsTo('App\PostCategory', 'parent_id', 'id');
    }

}
