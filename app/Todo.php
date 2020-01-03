<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;
    
    protected $table = 'todos';
    protected $dates = ['deleted_at'];


    public function users()
    {
        return $this->belongsToMany('App\User', 'todo_user');
    }
    public function checkUser($id)
    {
        foreach ($this->users as $user) {
            if($user->id == $id)
            {
                return true;
            }
        }
        return false;
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
