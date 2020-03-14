<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Validator;

class Client extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'registration_date',
        'terms_and_condition'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * client has one business relation
     * 
     */
    public function business()
    {
        return $this->hasOne(Business::class);
    }


    /**
     * client belongs to one group relation
     * 
     */

     public function group()
     {
         return $this->belongsTo(Group::class);
     }


      // relations

    /**
     * client belongs to user
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * client belongs to branch
     */

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * client has many identifications
     */

    public function identifications()
    {
        return $this->hasMany(Identification::class);
    }

    /**
     * client has many kins
     */

    public function kins()
    {
        return $this->hasMany(Kin::class);
    }

    /**
     * Loan polymorphic to client.
     */
    public function loan()
    {
        return $this->morphOne(Loan::class, 'loanable');
    }

     /**
     * client has one share
     */

    public function share()
    {
        return $this->hasOne(Share::class);
    }

     // Business Logic

     public function postClient(Request $request,User $user){
        $validator = Validator::make(
            $request->all(),[
        'registration_date'=>'required',
        'terms_and_condition' =>'required',
    
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());

          
            $client = new Client();

            $client->registration_date = $request->registration_date;
            $client->terms_and_condition  = $request->terms_and_condition;
           
            $user->client()->save($client);

            event(new ClientCreatedEvent());

    }
}
