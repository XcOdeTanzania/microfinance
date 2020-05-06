<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'branch_id',
        'account_number',
        'uuid',
        'status',
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
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }


    /**
     * Group report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

}
