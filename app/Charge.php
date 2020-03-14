<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charge extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name',
        'type',
        'amount',
        'collected_on',
        'date',
        'payment_mode'
    ];

    protected $dates =[
        'deleted_at'
    ];

//relations
 /**
     * Charges belongs to a loan
     */

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

}
