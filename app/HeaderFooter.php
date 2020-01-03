<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeaderFooter extends Model
{
    //


    use SoftDeletes;

    protected $table = 'header_footers';

    protected $dates = ['deleted_at'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
