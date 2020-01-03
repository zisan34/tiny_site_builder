<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlbumImage extends Model
{
    //

    use SoftDeletes;

    protected $table = 'album_images';

    protected $dates = ['deleted_at'];

    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'created_by');
    }
}
