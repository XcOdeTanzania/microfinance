<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Collateral extends Model {
    use SoftDeletes;

    protected $fillable = [
        'type',
        'value',
        'description',
        'attachment'

    ];

    //relations
     /**
     * loan belongs to a collateral
     */

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }


    // Business Logic



    /**
     * A function to save loan collaterals
     * 
     * @param Request $request is used to pass request body
     * @param Loan $loan is used to pass loan instance to save collateral
     * 
     * @return void
     */
    public function postCollateral(Request $request, Loan $loan) {
        
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'value' => 'required',
            ]
        );

        $collateral = new Collateral();

        $collateral->type = $request->type;
        $collateral->value = $request->value;

        $loan->collaterals()->save($collateral);


    }
}
