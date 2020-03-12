<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone_number_one',
        'phone_number_two',
        'date_of_birth',
        'tags',
        'town',
        'postal_address',
        'marital_status',
        'district_id',
        'latitude',
        'longitude',
        'email',
        'user_id'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
