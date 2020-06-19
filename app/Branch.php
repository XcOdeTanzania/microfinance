<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class Branch extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'region',
        'district',
        'street',
        'address',
        'phone_number',
        'post_code',
        'email',
        'company_id'
    ];


    // relations

    /**
     * branch has many client relations
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    /**
     * branch has many groups relations
     */

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    /**
     * branch belongs to a company relations
     */

    public function company()
    {
        return $this->belongsTo(company::class);
    }



    // Business Logic
    /*
    *  branch has many users
    */

    public function users()
    {
        return $this->hasMany(User::class);
    }

//  tasks relations

     public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //loans

    public function loans()
    {
        return $this->hasManyThrough('App\Loan', 'App\User');
    }

}
