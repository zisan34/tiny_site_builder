<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WelcomePageSetting extends Model
{
    //

    use SoftDeletes;

    protected $table = 'welcome_page_settings';

    protected $dates = ['deleted_at'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
