<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanStatus extends Model
{
    protected $table = 'loan_status';
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
