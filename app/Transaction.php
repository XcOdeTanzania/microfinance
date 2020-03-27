<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
  
    use SoftDeletes;

    protected $fillable = [
        'date', 'submitted_on', 'transaction_type', 'transaction_id','debit',
        'credit','balance','payment_details','loan_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

     //relations
     /**
     * share has one client
     */

    public function loans()
    {
        return $this->belongsTo(Loan::class);
    }

}
