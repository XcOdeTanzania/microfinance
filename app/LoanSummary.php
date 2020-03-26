<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanSummary extends Model
{
    use SoftDeletes;
    protected $table = 'loan_summary';

    protected $fillable = [
        'total_contract', 'total_paid', 'total_outstanding', 'total_overdue'
    ];

    protected $dates = [
        'deleted_at'
    ];


    //relations

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function fee()
    {
        return $this->hasOne(Fee::class);
    }

    public function principal()
    {
        return $this->hasOne(Principal::class);
    }

    public function interest()
    {
        return $this->hasOne(Interest::class);
    }

    public function penalty()
    {
        return $this->hasOne(Penalty::class);
    }
}
