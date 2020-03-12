<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collateral extends Model {
    use SoftDeletes;

    protected $fillable = [
        'id',
        'type',
        'value',
        'description',

    ];
}
