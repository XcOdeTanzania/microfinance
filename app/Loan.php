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
        return $this->hasMany(Guarantor::class);
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
    // public function postLoan(Request $request)
    // {   
      
    //     return $loan;

    // }
}
