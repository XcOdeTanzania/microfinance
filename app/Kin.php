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
        'kin_name',
        'kin_address',
        'date_of_birth_kin',
        'kin_city',
        'kin_phone_number',
        'kin_town',
        'relationship',
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

     
    // Business Logic

    public function postKin(Request $request, Client $client){
        $validator = Validator::make(
            $request->all(),[
                'kin_name'=>'required',
                'kin_address'=>'required',
                'date_of_birth_kin'=>'required',
                'kin_city'=>'required',
                'kin_phone_number'=>'required',
                'kin_town'=>'required',
                'relationship'=>'required',
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());


            $kin = new Kin();

            $kin->name = $request->kin_name;
            $kin->address = $request->kin_address;
            $kin->date_of_birth =  new DateTime('now');//$request->date_of_birth_kin;
            $kin->city = $request->kin_city;
            $kin->phone_number = $request->kin_phone_number;
            $kin->town = $request->kin_town;
            $kin->relationship = $request->relationship;

            $client->kins()->save($kin);

        }
}
