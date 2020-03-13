<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'business_id',
        'terms_and_condition'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * client has one business relation
     * 
     */
    public function business()
    {
        return $this->hasOne(Business::class);
    }


    /**
     * client belongs to one group relation
     * 
     */

     public function group()
     {
         return $this->belongsTo(Group::class);
     }


      // relations

    /**
     * client belongs to user
     */

    public function client()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * client belongs to branch
     */

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * client has many identifications
     */

    public function identifications()
    {
        return $this->hasMany(Identification::class);
    }

    /**
     * client has many kins
     */

    public function kins()
    {
        return $this->hasMany(Kin::class);
    }
}
