<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Events extends Model
{
    //

    use SoftDeletes;

    protected $table = 'events';

    protected $dates = ['deleted_at'];

    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
