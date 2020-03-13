<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kin extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'profile_id',
        'client_id',
        'relationship'
    ];

    protected $dates =[
        'deleted_at'
    ];
}
