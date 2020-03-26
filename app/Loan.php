<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Loan extends Model
{
    use SoftDeletes;
    protected $fillable = ['loan_type_id', 'loan_status_id', 'loan_status_date', 'top_up', 'amount', 'orign_of_fund', 'loan_term', 'repayment_frequency_type', 'repayment_frequency_number', 'interest_rate', 'disbursement_date',  'grace_on_principal_payment', 'grace_on_principal_interest', 'loan_purpose', 'auto_create_standing_instruction', 'loan_cycle', 'timely_repayments', 'amount_in_arrears', 'days_in_arrears', 'last_payment', 'next_payment', 'final_payment_expected'];

    protected $dates = ['deleted_at'];


    // relatiions

    /**
     * loan has many guarators
     */
    function guarantors()
    {
        return $this->belongsToMany(Guarantor::class);
    }

    /** 
     * loan polymorpic relations to client and group
     */

    public function loanable()
    {
        return $this->morphTo();
    }

    /**
     * user has many charges
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * loans has many charges
     */

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }

    /**
     * loans has many charges
     */

    public function summary()
    {
        return $this->hasOne(LoanSummary::class);
    }

    /**
     * Get the loan's principal.
     */
    public function summaryPrincipal()
    {
        return $this->hasOneThrough(Principal::class, LoanSummary::class);
    }

    /**
     * Get the loan's interest.
     */
    public function summaryInterest()
    {
        return $this->hasOneThrough(Interest::class, LoanSummary::class);
    }

    /**
     * Get the loan's fee.
     */
    public function summaryFee()
    {
        return $this->hasOneThrough(Fee::class, LoanSummary::class);
    }

    /**
     * Get the loan's penaltes.
     */
    public function summaryPenalty()
    {
        return $this->hasOneThrough(Penalty::class, LoanSummary::class);
    }
    /**
     * loan has many repayments
     */

    public function repayments()
    {
        return $this->hasMany(Repayment::class);
    }
    /**
     * loan has many collaterals
     */

    public function collaterals()
    {
        return $this->hasMany(Collateral::class);
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
    public function postLoan(Request $request, Client $client)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'top_up' => 'required',
                'amount' => 'required',
                'orign_of_fund' => 'required',
                'loan_term' => 'required',
                'repayment_frequent_type' => 'required',
                'repayment_frequency_number' => 'required',
                'interest_rate' => 'required',
                'disbursement_date' => 'required',


            ]
        );


        if ($validator->fails())
            return back()->with('error', $validator->errors());


        $loan = new Loan();

        $loan->top_up = $request->top_up;
        $loan->amount = $request->amount;
        $loan->orign_of_fund = $request->orign_of_fund;
        $loan->loan_term = $request->loan_term;
        $loan->repayment_frequency_type = $request->repayment_frequency_type;
        $loan->repayment_frequency_number = $request->repayment_frequency_number;
        $loan->interest_rate = $request->interest_rate;
        $loan->disbursement_date = $request->disbursement_date;
        $loan->grace_on_principal_payment = $request->grace_on_principal_payment;
        $loan->grace_on_principal_interest = $request->grace_on_principal_interest;
        $loan->loan_purpose = $request->loan_purpose;
        $loan->auto_create_standing_instruction = $request->auto_create_standing_instruction;


        $client->loan()->save($loan);
    }
    /**
     * Loan report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }
}
