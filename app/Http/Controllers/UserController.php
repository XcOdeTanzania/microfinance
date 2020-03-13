<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreatedEvent;

class UserController extends Controller
{
  
    public function createUser(Request $request){
        //TODO: create user, client, identification, business then next of kin
    
       
        $validator = Validator::make(
            $request->all(),[
                'first_name' => 'required',
                'email' => 'required | unique:users| email',
                'last_name' => 'required' 
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());

        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->last_name),
        ]);

        event(new UserCreatedEvent($request, $user));
    
     }
}
