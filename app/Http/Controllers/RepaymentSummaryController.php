<?php

namespace App\Http\Controllers;

use App\Loan;
use App\RepaymentSummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RepaymentSummaryController extends Controller
{
    //get RepaymentSummary
    public function getRepaymentSummaries()
    {
        $repaymentSummaries = RepaymentSummary::all();

        foreach ($repaymentSummaries as $key => $repaymentSummary) {
            $repaymentSummary->loan->client;
          
        }

        return response()->json(['repaymentsummaries' => $repaymentSummaries], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all RepaymentSummary
    public function getRepaymentSummary($repaymentSummaryId)
    {

        $repaymentSummary = RepaymentSummary::find($repaymentSummaryId);
        if (!$repaymentSummary) return response()->json(['error' => 'RepaymentSummary not found']);

        $repaymentSummary->groups;
        $repaymentSummary->loans;
        $repaymentSummary->loans;
        $repaymentSummary->users;

        return response()->json(['repaymentSummary' => $repaymentSummary], 200, [], JSON_NUMERIC_CHECK);
    }

    public function postRepaymentSummary(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'loan_id' => 'required',
                'principal' => 'required',
                'interest' => 'required',
                'savings' => 'required',
                'total' => 'required'
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($request->loan_id);
        if (!$loan) return response()->json(['error' => 'Loan not found']);


        $repaymentSummary = new RepaymentSummary();

        $repaymentSummary->principal = $request->principal;
        $repaymentSummary->interest = $request->interest;
        $repaymentSummary->savings = $request->savings;
        $repaymentSummary->total = $request->total;

        $loan->repaymentSummary()->save($repaymentSummary);

        return response()->json(['repaymentSummary' => $repaymentSummary]);
    }


    // put RepaymentSummary
    public function putRepaymentSummary(Request $request, $repaymentSummaryId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'principal' => 'required',
                'interest' => 'required',
                'savings' => 'required',
                'total' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $repaymentSummary = RepaymentSummary::find($repaymentSummaryId);
        if (!$repaymentSummary) return response()->json(['error' => 'RepaymentSummary not found']);

        $repaymentSummary->update([
            'principal' => $request->principal,
            'interest' => $request->interest,
            'savings' => $request->savings,
            'total' => $request->total
        ]);

        return response()->json(['repaymentSummary' => $repaymentSummary], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete RepaymentSummary
    public function deleteRepaymentSummary($repaymentSummaryId)
    {
        $repaymentSummary = RepaymentSummary::find($repaymentSummaryId);
        if (!$repaymentSummary) return response()->json(['error' => 'RepaymentSummary not found']);

        $repaymentSummary->delete();
        return response()->json(['message' => 'RepaymentSummary deleted successfully']);
    }
}
