<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Draft extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    public function draft_type()
    {
        return $this->belongsTo('App\Draft_type');
    }
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
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
    public function process_stat()
    {
        $stat = "";
        if($this->process_status == 0)
        {
            $stat = "New";
        }
        elseif($this->process_status == 1)
        {
            $stat = "Review";
        }
        elseif($this->process_status == 2)
        {
            $stat = "Approved";
        }
        elseif($this->process_status == 3)
        {
            $stat = "ReviewAfterApproved";
        }
        elseif($this->process_status == 4)
        {
            $stat = "ApprovalAfterRe-review";
        }
        return $stat;
    }
}
