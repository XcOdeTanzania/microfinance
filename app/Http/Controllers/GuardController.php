<?php

namespace App\Http\Controllers;

use App\Guard;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuardController extends Controller
{
    public function getGuards()
    {
        $guards = Guard::all();
        foreach ($guards as $guard) {
            $guard->roles;
        }
        return response()->json(['guards' => $guards]);
    }

    public function  addGuardToRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role_id' => 'required',
            'guard_id' => 'required',
            'action' => 'required'

        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 404);

        $guard = Guard::find($request->input('guard_id'));
        if (!$guard) return response()->json(['error' => 'Guard not found'], 404);

        $role = Role::find($request->input('role_id'));
        if (!$guard) return response()->json(['error' => 'Role not found'], 404);

        if ($request->action == 'attach')
            $role->guards()->attach($guard);
        if ($request->action == 'detach')
            $role->guards()->detach($guard);

        $role->guards;

        return response()->json(['role' => $role]);
    }
}
