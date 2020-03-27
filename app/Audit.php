<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audit extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'action',
        'date',
        'user',

    ];

    //relations
     /**
     * loan belongs to a collateral
     */

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

}
