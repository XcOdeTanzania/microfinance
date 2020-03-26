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
       'performedby',
       'brach',
       'group',
       'amount',
       'submittedondate',
       'effectivedate'

    ];


    protected $dates = [
        'deleted_at'
    ];
}
