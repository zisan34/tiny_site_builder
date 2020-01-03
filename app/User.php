<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'created_by', 'updated_by', 'deleted_by', 'rank'
    ];
    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function drafts()
    {
        return $this->belongsToMany('App\Draft');
    }
    public function notes()
    {
        return $this->belongsToMany('App\Note', 'note_user');
    }
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    public function user_account()
    {
        return $this->hasOne('App\UserAccount', 'user_id');
    }
    public function meals()
    {
        return $this->hasMany('App\Meal', 'user_id')->orderBy('meal_date');
    }

    public function all_meal_cost()
    {
        $meal_cost = 0;
        $meals = $this->meals;
        foreach ($meals as $key => $meal)
        {
            $meal_cost += $meal->total_price;
        }
        return $meal_cost;        
    }
    public function meal_cost($start, $end)
    {
        $meal_cost = 0;
        $meals = $this->meals->whereBetween('meal_date',  [$start, $end]);
        foreach ($meals as $key => $meal)
        {
            $meal_cost += $meal->total_price;
        }
        return $meal_cost;
    }
    public function transactions()
    {
        return $this->hasMany('App\UserTransaction', 'user_id')->orderBy('transaction_date', 'desc');
    }
}
