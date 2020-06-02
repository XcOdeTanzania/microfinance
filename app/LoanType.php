<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanType extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'interest_rate', 'max_duration', 'duration_type'];

    protected $dates = ['deleted_at'];
}
