<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'branch_id',
        'account_number',
        'uid',
        'status_id',
        'activation_date',
        'meeting_day',
        'meeting_location',
        'meeting_frequency'
    ];


    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * Group has many client relation
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Group belongs to a branch
     */

    public function branch()
    {
        return $this->belongsTo(Group::class);
    }

    
    /**
     * Loan polymorphic to group.
     */
    public function loan()
    {
        return $this->morphOne(Loan::class, 'loanable');
    }
}