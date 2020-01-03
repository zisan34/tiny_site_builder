<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use SoftDeletes;
    protected $table = 'pages';

    protected $dates = ['deleted_at'];

    protected $fillable=['title', 'content', 'parent_page_id', 'featured_image', 'publish_status', 'visibility', 'visibility_pass', 'publish_datetime', 'created_by'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
