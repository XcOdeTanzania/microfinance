<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Kin extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name',
        'address',
        'date_of_birth',
        'region',
        'phone_number',
        'district',
        'relationship',
        'image'
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
