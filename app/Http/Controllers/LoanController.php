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

class LoanController extends Controller
{
    /**
     * Display a create loans page.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLoanPage()
    {
        $charges = Charge::all();
        $groups = Group::all();
        $loanableNames = array();
        $clients = Client::all();

        foreach ($clients as $client) {
            array_push($loanableNames, $client->id . ' ' . $client->user->profile->first_name . ' ' . $client->user->profile->middle_name . ' ' . $client->user->profile->last_name);
            //array_push($loanableNames,$client->id.' '.$client->user->profile->first_name.' '.$client->user->profile->middle_name.' '.$client->user->profile->last_name);
        }
        foreach ($groups as $group) {
            array_push($loanableNames, $group->id . ' ' . $group->name);
        }

        return view('pages.loan.create', ['charges' => $charges, 'loanableNames' => $loanableNames]);
    }

    /**
     * Display  all loans.
     *
     * @return \Illuminate\Http\Response
     */
    public function loansPage()
    {
        return view('pages.loan.view');
    }

    /**
     * Display  loan details.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanDetailsPage($id)
    {
        $loan = Loan::find($id);


        if (!$loan) return back()->with("error", "Loan not found");

        /////

        $val = substr($loan->loanable_type, 4);
        $val_to_lower = strtolower($val);
        $loan->$val_to_lower = $loan->loanable_type::find($loan->loanable_id);
        $loan->officer = $loan->loanable_type::find($loan->loanable_id)->user;
        $loan->branch = $loan->loanable_type::find($loan->loanable_id)->branch;
        $loan->summary;
        $loan->summaryPrincipal;
        $loan->summaryInterest;
        $loan->summaryFee;
        $loan->summaryPenalty;
        $loan->repayments;
        $loan->transactions;
        $loan->guarantors;
        $loan->collaterals;
        $loan->standingInstructions;
        $loan->audits;
        $loan->surveys;


        $loan->product = LoanType::find($loan->loan_type_id);
        $loan->status = LoanStatus::find($loan->loan_status_id);
        if ($val_to_lower == 'group') {
            $group = $loan->loanable_type::find($loan->loanable_id);
            $loan->clients = $group->clients;
            $loan->groupMemberAllocation;
        }


        $loan->laonable;

        /////



        // dd(@json_encode($loan));
        // return response()->json(['loan'=> $loan]);
        return view('pages.loan.details', ['loan' => $loan]);
    }

    /**
     * Display  loans pending approval.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanPendingApprovalPage()
    {
        return view('pages.loan.pending-approval');
    }

    /**
     * Display  loans pending second approval.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanPendingSecondApprovalPage()
    {
        return view('pages.loan.pendingSecondApproval');
    }

    /**
     * Display  pending loan details.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanPendingDetailsPage($id)
    {
        return view('pages.loan.pending', ['id' => $id]);
    }

    /**
     * Display  pending loan details.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanCalculatorPage()
    {
        return view('pages.loan.calculator');
    }

    public function overpaidPage()
    {
        return view('pages.loan.overpaid');
    }

    public function awaitingPage()
    {
        return view('pages.loan.awaiting');
    }

    public function rejectedPage()
    {
        return view('pages.loan.rejected');
    }

    public function writtenOffPage()
    {
        return view('pages.loan.written-off');
    }

    public function closedPage()
    {
        return view('pages.loan.closed');
    }

    public function withdrawPage()
    {
        return view('pages.loan.withdraw');
    }


    // Business Logic


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

    public function updateLoanTerms(Request $request, $loanId)
    {

        $loan = Loan::find($loanId);

        if (!$loan) return;

        $loan->update([
            'top_up' => $request->top_up,
            'loan_size'  => $request->loan_size,
            'orign_of_funding'  => $request->orign_of_funding,
            'loan_term_type'  => $request->loan_term_type,
            'loan_term_number'  => $request->loan_term_number,
            'repayment_every_type'  => $request->repayment_every_type,
            'repayment_every_number' => $request->repayment_every_number,
            'interest_rate' => $request->interest_rate,
            'disbursement_date' => $request->disbursement_date,
            'grace_on_principal_payment' => $request->grace_on_principal_payment,
            'grace_on_interest_payment' => $request->grace_on_interest_payment,
        ]);

        return response()->json([
            'loan' => $loan
        ], 201);
    }


    public function updateLoanSettings(Request $request, $loanId)
    {

        $loan = Loan::find($loanId);

        $user = User::find($request->loan_officer_id);


        if (!$loan) return;

        $loan->update([
            'loan_purpose' => $request->loan_purpose,
            'auto_create_standing_instruction' => $request->auto_create_standing_instruction,
            'repayment_start_date' => $request->repayment_start_date,
            'loan_sector' => $request->loan_sector,
            'channel' => $request->channel,
        ]);


        return response()->json([
            'loan' => $loan
        ], 201);
    }









    /**
     * Function to call all loans
     * @param Request $request 
     */
    public function getAllLoans(Request $request)
    {
        if ($request->status == null) {
            $loans = Loan::all();
        } else {
            $filteredloans = Loan::all()->map(function ($loan) {
                return $loan;
            })
                ->reject(function ($loan) use ($request) {
                    $status = LoanStatus::find($loan->loan_status_id);


                    return $status->name != $request->status;
                });


            foreach ($filteredloans  as $key => $value) {
                $loans[] = $value;
            }
        }




        foreach ($loans as $loan) {

            $val = substr($loan->loanable_type, 4);
            $val_to_lower = strtolower($val);
            $loan->$val_to_lower = $loan->loanable_type::find($loan->loanable_id);
            $loan->officer = $loan->loanable_type::find($loan->loanable_id)->user;
            $loan->branch = $loan->loanable_type::find($loan->loanable_id)->branch;
            $loan->summary;
            $loan->summaryPrincipal;
            $loan->summaryInterest;
            $loan->summaryFee;
            $loan->summaryPenalty;
            $loan->repayments;
            $loan->transactions;
            $loan->guarantors;
            $loan->collaterals;
            $loan->standingInstructions;
            $loan->audits;
            $loan->surveys;


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
}
