<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'form_name',
        'submitted_on_date',
        'submitted_by',
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
