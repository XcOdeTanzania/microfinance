<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Repayment extends Model {
    use SoftDeletes;

    protected $fillable = [

        'date',
        'days',
        'paid_by',
        'disbursement',
        'principal_due',
        'principal_balance',
        'interest_due',
        'fee',
        'penalties',
        'expected_saving',
        'actual_saving',
        'total_paid',
        'total_outstanding',
        'load_id',

    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations
     /**
     * repayment belongs to a loan
     */

    public function loan ()
    {
        return $this->belongsTo(Loan::class);
    }
}
