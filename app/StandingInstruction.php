<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StandingInstruction extends Model
{
    protected $table = 'standing_instruction';
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
