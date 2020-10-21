<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'username', 'email', 'password', 'is_ad', 'role_id', 'career_id', 'status_id', 
    ];

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

    public function role(){
        //return $this->belongsTo('App\Role');
        return $this->belongsTo(Role::class);
    }

    public function career(){
        //return $this->belongsTo('App\Carrer');
        return $this->belongsTo(Career::class);
    }

    public function status()
    {
        //return $this->belongsTo('App\Status');
        return $this->belongsTo(Status::class);
    }

}
