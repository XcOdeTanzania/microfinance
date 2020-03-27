<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupMemberAllocation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'client',
        'amount',

    ];

    //relations
     /**
     * loan belongs to a collateral
     */

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
