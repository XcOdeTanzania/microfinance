<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Client;
use App\Group;
use App\Loan;
use App\LoanStatus;
use App\LoanType;
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


        $loan->charges = $loan->charges;
        $loan->loanable = $loan->loanable->user->branch;
        $loan->guarantors = $loan->guarantors;

        if (!$loan) return back()->with("error", "Loan not found");

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



    public function postLoan(Request $request)
    {


        return response()->json([
            'request' => $request->all()
        ], 200, [], JSON_NUMERIC_CHECK);

        //        return back()->with('message',$request);
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
