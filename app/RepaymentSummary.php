<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepaymentSummary extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'loan_id',
        'principal',
        'interest',
        'savings',
        'total'

    ];


    protected $dates = ['deleted_at'];

    //loan
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }

}
