<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kin extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name',
        'address',
        'date_of_birth',
        'city',
        'phone_number',
        'town',
        'relationship',
        'client_id',
    ];

    protected $dates =[
        'deleted_at'
    ];

    // relations

    /**
     * Kin belongs to Client
     */

     public function client()
     {
         return $this->belongsTo(Client::class);
     }
}
