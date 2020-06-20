<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reconciliation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'account_id', 'original_balance', 'reconciled_balance'
    ];

    protected $dates = [
        'deleted_at'
    ];


    //relations

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
