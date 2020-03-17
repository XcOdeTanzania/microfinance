<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'company_id'
    ];


    // relations

    /** 
     * branch has many client relations
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    
     /** 
     * branch has many groups relations
     */

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    /** 
     * branch belongs to a company relations
     */

    public function company()
    {
        return $this->belongsTo(company::class);
    }

    /*
    *  branch has many users
    */

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
