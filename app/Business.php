<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Business extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'start_date',
        'region',
        'address',
        'post_code',
        'revenue',
        'expenses',
        'net_income'
    ];

    protected $dates = [
        'deleted_at'
    ];


    // relations

    /**
     * business belongs to client relation
     */

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    public function task()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

     /**
     * Loan polymorphic to client.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }

}
