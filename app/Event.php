<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    //
    use SoftDeletes;

    protected $table = 'events';
    
    protected $fillable = ['title','start_date','end_date', 'class'];

    protected $dates = ['deleted_at'];
}
