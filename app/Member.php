<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */


    use SoftDeletes;

    protected $table = 'members';

    protected $dates = ['deleted_at'];

    public function member_category()
    {
    	return $this->belongsTo('App\MemberCategory', 'category_id');
    }

    public function member_subcategory()
    {
    	return $this->belongsTo('App\MemberCategory', 'subcategory_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    
}
