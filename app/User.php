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
        'name', 'email', 'password',
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


    // relations

    /**
     * user has one client relation
     */

     public function client()
     {
         return $this->hasOne(Client::class);
     }


    /**
     * Get the profile.
     */
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

     /**
     * user has many roles
     */
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
