<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreatedEvent;
use App\Events\UserCreatedEvent as EventsUserCreatedEvent;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  
    public function createClient(Request $request){
        //TODO: create user, client, identification, business then next of kin
    
       
        $validator = Validator::make(
            $request->all(),[
                'first_name' => 'required',
                'client_email' => 'required | unique:users,email| email',
                'last_name' => 'required' 
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());

        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->client_email,
            'password' => Hash::make($request->last_name),
        ]);

        event(new EventsUserCreatedEvent($request, $user));
    
     }
}
