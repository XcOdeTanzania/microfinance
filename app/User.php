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

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
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
        return $this->belongsToMany(Role::class);
    }

  /**
     * check for role
     */
    public function is($roleName)
    {
        foreach ($this->roles()->get() as $role)
        {
            if ($role->name == $roleName)
            {
                return true;
            }
        }

        return false;
    }

    /*
    *  user belongs to a branch
    */

    public function branch()
    {
        return $this->belongsTo(Branch::class);

    }

    // relations

    /**
     * user belongs to one task relation
     */

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
