<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Draft_type extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use SoftDeletes;
    protected $table = 'draft_categories';
    protected $dates = ['deleted_at'];

    public function draft()
    {
       return$this->hasMany('App\Draft');
    }
    public function subTypes()
    {
       return$this->hasMany('App\Draft_type', 'parent_id');
    }
}
