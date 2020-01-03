<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //

    use SoftDeletes;

    protected $table = 'posts';

    protected $dates = ['deleted_at'];

    public function post_category()
    {
        return $this->belongsTo('App\PostCategory');
    }
    public function post_sub_category()
    {
        return $this->belongsTo('App\PostCategory', 'post_sub_category_id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'created_by');
    }
}
