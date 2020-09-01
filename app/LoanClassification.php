<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanClassification extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'past_due', 'provision'];

    protected $dates = ['deleted_at'];

    //relationships

    //loans
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
