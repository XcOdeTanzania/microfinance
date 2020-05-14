<?php

namespace App\Http\Controllers;

use App\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{

    public function getRoles()
    {
        $roles = Role::all();
        foreach ($roles as $role) {
            $role->roles;
        }
        return response()->json(['roles' => $roles]);
    }

    public function  addRoleToRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'role_id' => 'required',
            'action' => 'required'

        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $role = Role::find($request->input('role_id'));
        if (!$role) return response()->json(['error' => 'Role not found'], 404);

        $user = User::find($request->input('user_id'));
        if (!$user) return response()->json(['error' => 'User not found'], 404);

        if ($request->action == 'attach')
            $user->roles()->attach($role);
        if ($request->action == 'detach')
            $user->roles()->detach($role);

        $user->roles;

        return response()->json(['user_role' => $user]);
    }
    
}


