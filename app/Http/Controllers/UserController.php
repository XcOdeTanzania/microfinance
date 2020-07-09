<?php

namespace App\Http\Controllers;
use App\User;
class UserController extends Controller
{

    public function users()
    {
        $users = User::all();
		
        foreach ($users as $user) {
            $user->profile = $user->profile;
            $user->roles = $user->roles;
            $user->branch = $user->branch;
        }
        return response()->json(['users' => $users]);
    }

    public function user($id)
    {
        $user = User::find($id);
        if (!$user) return response()->json(['error' => 'User not found']);

        $user->profile;
        $user->branch;
        $user->roles;
        return  response()->json(['users' => $user]);
    }
}
