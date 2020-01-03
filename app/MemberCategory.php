<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberCategory extends Model
{
    //
    use SoftDeletes;

    protected $table = 'member_categories';

    protected $dates = ['deleted_at'];

    public function members()
    {
        return $this->hasMany('App\Member')->latest();
    }
    public function member_subcategories()
    {
        return $this->hasMany('App\MemberCategory', 'parent_id')->orderBy('order','asc');
    }
    public function parent_category()
    {
        return $this->belongsTo('App\MemberCategory', 'parent_id', 'id');
    }

}
