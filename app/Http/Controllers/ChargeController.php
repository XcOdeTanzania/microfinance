<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChargeController extends Controller
{

    //get Charge
    public function getCharges()
    {
        $charges = Charge::all();

        return response()->json(['charges' => $charges], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Charge
    public function getCharge($chargeId)
    {

        $charge = Charge::find($chargeId);
        if (!$charge) return response()->json(['error' => 'Charge not found']);

        return response()->json(['charge' => $charge], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Charge
    public function postCharge(Request $request, $loanId)
    {
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

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);


        $charge = new Charge();

        $charge->name = $request->name;
        $charge->type  = $request->type;
        $charge->amount  = $request->amount;
        $charge->collected_on  = $request->collected_on;
        $charge->date  = $request->date;
        $charge->payment_mode  = $request->payment_mode;

        $loan->charges()->save($charge);

        return response()->json(['charge' => $charge]);
    }



    // put Charge
    public function putCharge(Request $request, $businessId)
    {
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
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $charge = Charge::find($businessId);
        if (!$charge) return response()->json(['error' => 'Charge not found']);

        $charge->update([
            'name' => $request->name,
            'type' => $request->type,
            'amount' => $request->amount,
            'collected_on' => $request->collected_on,
            'date' => $request->date,
            'payment_mode' => $request->payment_mode
        ]);

        return response()->json(['charge' => $charge], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Charge
    public function deleteCharge($chargeId)
    {
        $charge = Charge::find($chargeId);
        if (!$charge) return response()->json(['error' => 'Charge not found']);

        $charge->delete();
        return response()->json(['message' => 'Charge deleted successfully']);
    }
}
