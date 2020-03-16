<?php

namespace App;

use App\Events\ClientCreatedEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Validator;

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
                'name'=>'required',
                'address'=>'required',
                'date_of_birth'=>'required',
                'city'=>'required',
                'phone_number'=>'required',
                'town'=>'required',
                'relationship'=>'required',
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());


            $kin = new Kin();

            $kin->name = $request->name;
            $kin->address = $request->address;
            $kin->date_of_birth = $request->date_of_birth;
            $kin->city = $request->city;
            $kin->phone_number = $request->phone_number;
            $kin->town = $request->town;
            $kin->relationship = $request->relationship;

            $client->kins()->save($kin);

            event(new ClientCreatedEvent($request, $client));

        }
}
