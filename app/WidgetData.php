<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class WidgetData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */


    use SoftDeletes;

    protected $table = 'widget_data';

    protected $dates = ['deleted_at'];
    
    public function widget()
    {
        return $this->belongsTo('App\Widget', 'widget_id');
    }
    public function post()
    {
        if($this->widget->type == 2)
        {
            return $this->belongsTo('App\Post', 'model_id');
        }
        return;
    }
    public function page()
    {
        if($this->widget->type == 2)
        {
            return $this->belongsTo('App\Page', 'model_id');
        }
        return;
    }
    public function member()
    {
        if($this->widget->type == 1)
        {
            return $this->belongsTo('App\Member', 'model_id');
        }
        return;
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    
}
