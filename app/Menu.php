<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    //


    use SoftDeletes;

    protected $table = 'menus';

    protected $dates = ['deleted_at'];

    public function submenus()
    {
        return $this->hasMany('App\Menu',  'parent_id')->orderBy('order','asc');
    }
    public function lastSubmenu()
    {
        return $this->hasMany('App\Menu',  'parent_id')->orderBy('order','desc')->first();
    }
    public function parentMenu()
    {
        return $this->belongsTo('App\Menu', 'parent_id', 'id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
