<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'nickname', 'city' ,'cellphone' ,'referredby', 'is_approved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rep(){
        return $this->hasOne('App\Rep', 'id_rep', 'id_rep');
    }

    public function polls(){
        return $this->hasMany('App\PollsModel', 'id_User', 'id');
    }
    
}
