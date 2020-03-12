<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Eloquent\SoftDeletes;

class Charge extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name',
        'type',
        'amount',
        'collected_on',
        'date',
        'payment_mode'
    ];

    protected $dates =[
        'deleted_at'
    ];
}
