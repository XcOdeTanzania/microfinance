<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'balance_due',
        'loan_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations

    public function businessCheckingAccount()
    {
        return $this->hasOne(BusinessCheckingAccount::class);
    }
}
