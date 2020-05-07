<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Client;
use App\Group;
use App\Loan;
use App\LoanStatus;
use App\LoanType;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{


    public function getLoans($status)
    {
        $loans = Loan::all();
        if ($status != 'all') {
            $$loans = $loans->map(function ($loan) {
                return $loan;
            })
                ->reject(function ($loan) use ($status) {
                    return $loan->status != $status;
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


            $loan->product = LoanType::find($loan->loan_type_id);
            $loan->status = LoanStatus::find($loan->loan_status_id);
            if ($val_to_lower == 'group') {
                $group = $loan->loanable_type::find($loan->loanable_id);
                $loan->clients = $group->clients;
                $loan->groupMemberAllocation;
            }


            $loan->laonable;
        }
        return response()->json([
            'loans' => $loans,
        ], 200, [], JSON_NUMERIC_CHECK);
    }


    /**
     * A fucntion to create new loan to client
     * 
     * @param Request $request is used to pass request body
     * @param Client $client is used to create instance to save a client with loans
     * 
     * @return void
     */
    public function postLoan(Request $request)
    {   
        $validator = Validator::make(
            $request->all(),
            [
                'loan_type_id' => 'required',
                'status' => 'required',
                'top_up' => 'required',
                'amount' => 'required',
                'orign_of_funding' => 'required',
                'duration' => 'required',
                'repayment_every' => 'required',
                'repayment_every_type' => 'required',
                'repayment_day_of_the_week' => 'required',
                'repayment_week_of_the_month' => 'required',
                'disbursement_date' => 'required',
                'grace_on_interest_payment' => 'required',
                'grace_on_principal_payment' => 'required',
                'purpose' => 'required',
                'auto_create_standing_instruction' => 'required',
                'repayment_start_date' => 'required',
                'sector' => 'required',
                'channel' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);


        $val = substr($request->loanable_type, 4);
        $val_to_lower = strtolower($val);

        $loan = new Loan();
        $loan->loan_type_id = $request->loan_type_id;
        $loan->loan_subtype_id = $request->loan_subtype_id;
        $loan->loan_status_id = 1;
        $loan->loan_status_date = Carbon::now();




        if ($val_to_lower == 'group') {
            $group = Group::find($request->loanable_id);
            $group->loans()->save($loan);
        } else if ($val_to_lower == 'client') {
            $client = Client::find($request->loanable_id);
            $client->loans()->save($loan);
        } else {
            return response()->json([
                'error' => $val_to_lower . ' is not a loan type'
            ]);
        }



        return response()->json([
            'loan' => $loan
        ], 201);


        // $loan->top_up = $request->top_up;
        // $loan->amount = $request->amount;
        // $loan->orign_of_funding = $request->orign_of_funding;
        // $loan->loan_term = $request->loan_term;
        // $loan->repayment_frequency_type = $request->repayment_frequency_type;
        // $loan->repayment_frequency_number = $request->repayment_frequency_number;
        // $loan->interest_rate = $request->interest_rate;
        // $loan->disbursement_date = $request->disbursement_date;
        // $loan->grace_on_principal_payment = $request->grace_on_principal_payment;
        // $loan->grace_on_principal_interest = $request->grace_on_principal_interest;
        // $loan->loan_purpose = $request->loan_purpose;
        // $loan->auto_create_standing_instruction = $request->auto_create_standing_instruction;



    }
}
