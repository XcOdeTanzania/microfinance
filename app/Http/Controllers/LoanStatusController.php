<?php

namespace App\Http\Controllers;

use App\LoanStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanStatusController extends Controller
{
    public function getAllLoanStatus()
    {
        $loanStatus = LoanStatus::all();

        return response()->json([
            'loanStatus' => $loanStatus,
        ], 200, [], JSON_NUMERIC_CHECK);
    }


    //get all LoanStatus
    public function getLoanStatus($loanId)
    {

        $loanStatus = LoanStatus::find($loanId);
        if (!$loanStatus) return response()->json(['error' => 'LoanStatus not found']);

        return response()->json(['loanStatus' => $loanStatus], 200, [], JSON_NUMERIC_CHECK);
    }


    // put LoanStatus
    public function postLoanStatus(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);


        $loanStatus = new LoanStatus();
        $loanStatus->name = $request->name;
        $loanStatus->save();

        return response()->json(['loanStatus' => $loanStatus], 200, [], JSON_NUMERIC_CHECK);
    }

    // put LoanStatus
    public function putLoanStatus(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loanStatus = LoanStatus::find($businessId);
        if (!$loanStatus) return response()->json(['error' => 'LoanStatus not found']);

        $loanStatus->update([
            'name' => $request->name,

        ]);

        return response()->json(['loanStatus' => $loanStatus], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete LoanStatus
    public function deleteLoanStatus($loanId)
    {
        $loanStatus = LoanStatus::find($loanId);
        if (!$loanStatus) return response()->json(['error' => 'LoanStatus not found']);

        $loanStatus->delete();
        return response()->json(['message' => 'LoanStatus deleted successfully']);
    }
}
