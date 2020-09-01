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
        'product_id',
        'status',
        'interest',
        'amount',
        'duration',
        'disbursement_date',
        'repayment_start_date',
        'repayment_end_date',
        'amount_refund_per_month',
        'loan_officer_id',
        'account_id',
        'client_id',
        'group_loan_id'
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
     * loan has many schedules
     */
    function schedules()
    {
        return $this->hasMany(Schedule::class);
    }



    /**
     * user has many charges
     */

    public function loanOfficer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }


    /**
     * loans has many charges
     */

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }


    //prouct
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
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


    public function businessChecking()
    {
        return $this->hasManyThrough(BusinessCheckingAccount::class, RentAccount::class);
    }
}
