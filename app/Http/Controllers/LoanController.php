<?php

namespace App\Http\Controllers;

use App\Loan;
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
        return view('pages.loan.create');
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
    public function loanDetailsPage()
    {
        return view('pages.loan.details');
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
}
