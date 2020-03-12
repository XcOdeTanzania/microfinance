<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use SoftDeletes;
    protected $fillable = ['loan_type_id', 'top_up', 'amount', 'orign_of_fund', 'loan_term', 'repayment_frequency_type', 'repayment_frequency_number', 'interest_rate', 'disbursement_date', 'grace_on_principal_payment', 'grace_on_principal_interest', 'loan_purpose', 'auto_create_standing_instruction'];

    protected $dates = ['deleted_at'];
}
