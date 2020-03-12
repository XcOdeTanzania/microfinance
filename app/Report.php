<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
