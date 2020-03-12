<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'name',
        'type',
        'date_of_start',
        'address',
        'post_code',
        'business_revinue',
        'expenses',
        'net_income'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
