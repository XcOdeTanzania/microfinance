<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Eloquent\SoftDeletes;

class Guarantor extends Model
{
    
    use SoftDeletes;
    
    protected $fillable =[
        'profile_id',
        'type'
    ];

    protected $dates =[
        'deleted_at'
    ];
}
