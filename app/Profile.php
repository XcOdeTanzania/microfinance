<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        'date_of_birth_client',
        'tags',
        'client_town',
        'postal_address',
        'marital_status',
        'district_id',
        'latitude',
        'longitude',
        'client_email'
    ];

    protected $dates = [
        'deleted_at'
    ];


    // relations

    /**
     * Get the owning profileable model.
     */
    public function profileable()
    {
        return $this->morphTo();
    }

    // Logics

    /**
     * Post Profile
     */

      public function postProfile(Request $request,$profilableType,$profileableId)
     {
         $validator = Validator::make(
             $request->all(),[
                'first_name'=>'required',
                'last_name'=>'required',
                'gender'=>'required',
                'phone_number_one'=>'required',
                'date_of_birth_client' =>'required',
                'client_town' => 'required',
                'marital_status' => 'required',
                'district_id' => 'required',
                'client_email'=> 'required|email|unique:profiles,email',
             ]
         );

         if($validator->fails())
             return back()->with('error',$validator->errors());


        // Save Profile
        $profile = new Profile();

        $profile->first_name = $request->input('first_name');
        $profile->middle_name = $request->input('middle_name');
        $profile->last_name = $request->input('last_name');
        $profile->gender = $request->input('gender');
        $profile->phone_number_one = $request->input('phone_number_one');
        $profile->phone_number_two = $request->input('phone_number_two');
        $profile->date_of_birth =  new DateTime('now');//$request->input('date_of_birth_client');
        $profile->tags = $request->input('tags');
        $profile->town = $request->input('client_town');
        $profile->postal_address = $request->input('postal_address');
        $profile->marital_status = $request->input('marital_status');
        $profile->latitude = $request->input('latitude');
        $profile->longitude = $request->input('longitude');
        $profile->district_id = $request->input('district_id');
        $profile->email = $request->input('client_email');

        if($profilableType === 'guarantor'){
            $guarantor = Guarantor::find($profileableId);
            if(!$guarantor) back()->with('error','Guarantor does not exist');
            $guarantor->profile()->save($profile);
        }
        else if($profilableType === 'client'){
            $user = User::find($profileableId);
            if(!$user) back()->with('error','User does not exist');
            $user->profile()->save($profile);
            return redirect(route('client.pending.approval'))->with('success','Client Created Succefully');
        }

        else return back()->with('error','Invalid Profileable Type');
         
        
     }
}
