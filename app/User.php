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
        'user_type_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_skill(){
        return $this->hasOne('App\UserSkill');
    }

    public function user_profile(){
        return $this->hasOne("App\UserProfile");
    }

    public function messages(){
        return $this->hasMany('App\message');
    }

    public function conversations(){
        return $this->hasMany('App\conversation', 'sender_id');
    }
}
