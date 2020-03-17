<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relations

     /**
     * role belongs to many users
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
