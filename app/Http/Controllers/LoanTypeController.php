<?php

namespace App\Http\Controllers;

use App\LoanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanTypeController extends Controller
{

    //get LoanType
    public function getLoanTypes()
    {
        $loanTypes = LoanType::all();

        return response()->json(['loanTypes' => $loanTypes], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all LoanType
    public function getLoanType($loanTypeId)
    {

        $loanType = LoanType::find($loanTypeId);
        if (!$loanType) return response()->json(['error' => 'LoanType not found']);

        return response()->json(['loanType' => $loanType], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post LoanType
    public function postLoanType(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'interest_rate' => 'required',
                'max_duration' => 'required',
                'duration_type' => 'required'
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loanType = new LoanType();

        $loanType->name = $request->name;
        $loanType->interest_rate  = $request->interest_rate;
        $loanType->max_duration  = $request->max_duration;
        $loanType->duration_type  = $request->duration_type;

        $loanType->save();

        return response()->json(['loanType' => $loanType]);
    }



    // put LoanType
    public function putLoanType(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'interest_rate' => 'required',
                'max_duration' => 'required',
                'duration_type' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loanType = LoanType::find($businessId);
        if (!$loanType) return response()->json(['error' => 'LoanType not found']);

        $loanType->update([
            'name' => $request->name,
            'interest_rate' => $request->interest_rate,
            'max_duration' => $request->max_duration,
            'duration_type' => $request->duration_type
        ]);

        return response()->json(['loanType' => $loanType], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete LoanType
    public function deleteLoanType($loanTypeId)
    {
        $loanType = LoanType::find($loanTypeId);
        if (!$loanType) return response()->json(['error' => 'LoanType not found']);

        $loanType->delete();
        return response()->json(['message' => 'LoanType deleted successfully']);
    }
}
