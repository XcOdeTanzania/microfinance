<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Principal extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'contract', 'paid', 'outstanding', 'overdue'
    ];

    protected $dates = [
        'deleted_at'
    ];


    //relations

    public function summary()
    {
        return $this->belongsTo(LoanSummary::class);
    }
}
