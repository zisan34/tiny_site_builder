<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    //

    use SoftDeletes;

    protected $table = 'videos';

    protected $dates = ['deleted_at'];


    public function user(){
        return $this->belongsTo('App\User', 'created_by');
    }
}
