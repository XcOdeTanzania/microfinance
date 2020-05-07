<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Loan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'loan_type_id',
        'status',
        'top_up',
        'amount',
        'orign_of_funding',
        'duration',
        'repayment_every', 
        'repayment_every_type',
        'repayment_day_of_the_week',
        'repayment_week_of_the_month',
        'disbursement_date',
        'grace_on_interest_payment',
        'grace_on_principal_payment',
        'purpose',
        'auto_create_standing_instruction',
        'repayment_start_date',
        'sector',
        'channel',
        'final_payment_expected',
    ];


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

    public function officer()
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

    /**
     * loan has many repayments
     */

    public function audits()
    {
        return $this->hasMany(Audit::class);
    }

    /**
     * loan has many transactions
     */

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * loan has many transactions
     */

    public function groupMemberAllocation()
    {
        return $this->hasMany(GroupMemberAllocation::class);
    }


    public function standingInstructions()
    {
        return $this->hasMany(StandingInstruction::class);
    }


    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }



    /**
     * Loan report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function task()
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    //logic
    public function postLoan(Request $request)
    {   
        $validator = Validator::make(
            $request->all(),
            [
                'loan_type_id' => 'required',
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


        $loan = new Loan();
        $loan->loan_type_id = $request->loan_type_id;
        $loan->status = $request->status;
        $loan->amount = $request->amount;
        $loan->orign_of_funding = $request->orign_of_funding;
        $loan->duration = $request->duration;
        $loan->repayment_every = $request->repayment_every;
        $loan->repayment_every_type = $request->repayment_every_type;
        $loan->disbursement_date = $request->disbursement_date;
        $loan->grace_on_interest_payment = $request->grace_on_interest_payment;
        $loan->grace_on_principal_payment = $request->grace_on_principal_payment;
        $loan->purpose = $request->purpose;
        $loan->auto_create_standing_instruction = $request->auto_create_standing_instruction;
        $loan->repayment_start_date = $request->repayment_start_date;
        $loan->sector = $request->sector;
        $loan->channel = $request->channel;

        return $loan;

    }
}
