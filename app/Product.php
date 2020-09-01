<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'interest_rate', 'loan_application_fee_rate', 'loaan_agreement_contract_fee_rate', 'penalty_for_late_payment_rate', 'loan_guarantee_fund_rate', 'insurance_fund_rate', 'minimum_amount', 'maximum_amount', 'increment_per_cycle'];

    protected $dates = ['deleted_at'];

    //relations

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
