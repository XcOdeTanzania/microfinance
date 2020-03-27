<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'name',
       'action',
       'entity',
       'user_id',
       'brach_id',
       'group_id',
       'amount',
       'submittedondate',
       'effectivedate'

    ];


    protected $dates = [
        'deleted_at'
    ];


 // relations

    /**
     * tasks relation
     */

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function brach()
    {
        return $this->hasOne(Branch::class);
    }
}
