<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'day',
        'date',
        'amount',
    ];

    protected $dates =[
        'deleted_at'
    ];

    // relations

    /**
     * schedule belongs to Loan
     */

     public function loan()
     {
         return $this->belongsTo(Loan::class);
     }

     
}
