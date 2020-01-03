<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    //

    use SoftDeletes;

    protected $table = 'albums';

    protected $dates = ['deleted_at'];

    public function images()
    {
        return $this->hasMany('App\AlbumImage', 'album_id');
    }
    public function image()
    {
        return $this->hasOne('App\AlbumImage', 'album_id')->orderBy('created_at', 'desc');
    }
    public function user(){
        return $this->belongsTo('App\User', 'created_by');
    }
}
