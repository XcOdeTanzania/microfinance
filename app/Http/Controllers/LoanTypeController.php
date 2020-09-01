<?php

namespace App\Http\Controllers;

use App\LoanClassification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanClassificationController extends Controller
{

    //get LoanClassification
    public function getLoanClassifications()
    {
        $loanClassifications = LoanClassification::all();

        return response()->json(['loanClassifications' => $loanClassifications], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all LoanClassification
    public function getLoanClassification($loanClassificationId)
    {

        $loanClassification = LoanClassification::find($loanClassificationId);
        if (!$loanClassification) return response()->json(['error' => 'LoanClassification not found']);

        return response()->json(['loanClassification' => $loanClassification], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post LoanClassification
    public function postLoanClassification(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loanClassification = new LoanClassification();

        $loanClassification->name = $request->name;
        $loanClassification->past_due  = $request->past_due;
        $loanClassification->provision  = $request->provision;

        $loanClassification->save();

        return response()->json(['loanClassification' => $loanClassification]);
    }



    // put LoanClassification
    public function putLoanClassification(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loanClassification = LoanClassification::find($businessId);
        if (!$loanClassification) return response()->json(['error' => 'LoanClassification not found']);

        $loanClassification->update([
            'name' => $request->name,
            'past_due' => $request->past_due,
            'provision' => $request->provision
        ]);

        return response()->json(['loanClassification' => $loanClassification], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete LoanClassification
    public function deleteLoanClassification($loanClassificationId)
    {
        $loanClassification = LoanClassification::find($loanClassificationId);
        if (!$loanClassification) return response()->json(['error' => 'LoanClassification not found']);

        $loanClassification->delete();
        return response()->json(['message' => 'LoanClassification deleted successfully']);
    }
}
