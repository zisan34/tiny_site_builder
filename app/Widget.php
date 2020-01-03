<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Widget extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */


    use SoftDeletes;

    protected $table = 'widgets';

    protected $dates = ['deleted_at'];

    public function datas()
    {
        return $this->hasMany('App\WidgetData','widget_id');
    }
    public function data()
    {
        return $this->hasOne('App\WidgetData','widget_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    
}
