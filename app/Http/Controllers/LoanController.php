<?php

namespace App\Http\Controllers;

use App\Events\CreateScheduleEvent;
use App\Loan;
use App\LoanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{


    public function getLoans(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'status' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loans = Loan::all();
        if ($request->status != 'all') {
            $loans = $loans->map(function ($loan) {
                return $loan;
            })
                ->reject(function ($loan) use ($request) {
                    return $loan->status != $request->status;
                })->values();
        }

        foreach ($loans as $loan) {

            // $val = substr($loan->loanable_type, 4);
            // $val_to_lower = strtolower($val);
            // $loan->$val_to_lower = $loan->loanable_type::find($loan->loanable_id);
            // $loan->officer = $loan->loanable_type::find($loan->loanable_id)->user;
            // $loan->branch = $loan->loanable_type::find($loan->loanable_id)->branch;
            // $loan->summary;
            // $loan->summaryPrincipal;
            // $loan->summaryInterest;
            // $loan->summaryFee;
            // $loan->summaryPenalty;
            // $loan->repayments;
            // $loan->transactions;
            // $loan->guarantors;
            // $loan->collaterals;
            // $loan->standingInstructions;
            // $loan->audits;
            // $loan->surveys;


            $loan->loan_type = LoanType::find($loan->loan_type_id);



            $loan->laonable;
        }
        return response()->json([
            'loans' => $loans,
        ], 200, [], JSON_NUMERIC_CHECK);
    }


    //get all Loan
    public function getLoan($loanId)
    {


        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
    }

    // put Loan
    public function putLoan(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'status' => 'required',
                'amount' => 'required',
                'orign_of_funding' => 'required',
                'duration' => 'required',
                'repayment_every' => 'required',
                'repayment_every_type' => 'required',
                'purpose' => 'required',
                'auto_create_standing_instruction' => 'required',
                'sector' => 'required',
                'channel' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($businessId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->update([
            'status' => $request->status,
            'amount' => $request->amount,
            'orign_of_funding' => $request->orign_of_funding,
            'duration' => $request->duration,
            'repayment_every' => $request->repayment_every,
            'repayment_every_type' => $request->repayment_every_type,
            'purpose' => $request->purpose,
            'auto_create_standing_instruction' => $request->auto_create_standing_instruction,
            'sector' => $request->sector,
            'channel' => $request->channel
        ]);

        return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Loan
    public function deleteLoan($loanId)
    {
        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->delete();
        return response()->json(['message' => 'Loan deleted successfully']);
    }


    //disburse loans
    public function disburseLoan($loanId)
    {

        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        if ($loan->status == 'Awaiting Disbursement') {
            event(new CreateScheduleEvent($loan));
            $loan->update([
                'status' => 'Active'
            ]);
            return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
        }
        return response()->json(['error' => 'The loan could not be disbursed'], 200, [], JSON_NUMERIC_CHECK);
    }
}
