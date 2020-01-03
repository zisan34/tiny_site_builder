<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class SocialMedia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */


    use SoftDeletes;

    protected $table = 'social_medias';

    protected $dates = ['deleted_at'];
    
    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    
}
