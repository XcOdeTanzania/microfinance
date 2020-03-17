<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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



    // Business Logic


    /**
     * A fucnction to add loan charges
     * 
     * @param Request $request is used to pass request body
     * @param Loan $loan is used to create loan instance
     * 
     * @return void
     */
    public function postCharges(Request $request, Loan $loan) {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'amount' => 'required',
                'collected_on' => 'required',
                'date' => 'required',
                'payment_mode' => 'required'
            ]
        );

        $charges = new Charge();

        $charges->name = $request->name;
        $charges->type = $request->type;
        $charges->amount = $request->amount;
        $charges->collected_on = $request->collected_on;
        $charges->date = $request->date;
        $charges->payment_mode = $request->payment_mode;

        $loan->charges()->save($charges);
    }
}
