<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GeneralSetting extends Model
{
    //

    use SoftDeletes;

    protected $table = 'general_settings';

    protected $dates = ['deleted_at'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
