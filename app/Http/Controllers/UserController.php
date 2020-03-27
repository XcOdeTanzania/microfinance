<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use App\Events\UserCreatedEvent;
use App\Events\UserCreatedEvent as EventsUserCreatedEvent;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->profile;
        }
//        return response()->json(['users'=>$users]);
        return view('pages.user.users', ['users' => $users]);
    }

    public function usersList()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->profile = $user->profile;
            $user->roles = $user->roles;
            $user->branch = $user->branch;
            $user['first'] = $user->profile['first_name'];
            $user['middle'] = $user->profile['middle_name'];
            $user['last'] = $user->profile['last_name'];
            $user->active = $user->active ==1 ? 'Yes' : 'No';
//            $user->put('first_name',$user->profile->first_name );
        }
        return response()->json(['users' => $users]);
    }

    public function userDetails($id)
    {
        $user = User::find($id);
        if(!$user) return back()->with('error','User Not found');
        $user->profile;
        $user->branch;
        $user->roles;
        $user->active = $user->active ==1 ? 'Yes' : 'No';
        return view('pages.user.details',['user'=>$user]);
    }

}
