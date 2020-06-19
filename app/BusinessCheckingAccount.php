<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessCheckingAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'rent_account_id',
        'pay_balance',
        'loan_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations

    public function rentAccount()
    {
        return $this->belongsTo(RentAccount::class);
    }
}
