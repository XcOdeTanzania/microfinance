<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'type', 'bank_account_no', 'tag', 'usage', 'manual_entries_allowed', 'enable_bank_reconciliation', 'balance', 'unreconciled_balance', 'status', 'branch_id'];

    protected $dates = ['deleted_at'];

    //relations
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }


    public function reconciliations()
    {
        return $this->hasMany(Reconciliation::class);
    }
}
