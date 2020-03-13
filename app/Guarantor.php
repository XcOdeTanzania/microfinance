<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guarantor extends Model
{

    use SoftDeletes;

    protected $fillable =[
        'profile_id',
        'type'
    ];

    protected $dates =[
        'deleted_at'
    ];


    // relations

    /**
     * Get the profile.
     */
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

    /**
     * guarantor has many loans.
     */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

}
