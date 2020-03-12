<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Eloquent\SoftDeletes;

class Clients extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'business_id',
        'terms_and_condition'
    ];

}
