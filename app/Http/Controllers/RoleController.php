<?php

namespace App\Http\Controllers;

use App\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function allRoles()
    {
        $roles = Role::all();
        foreach ($roles as $role){
            $role->active =   $role->active ==1 ? true : false;
        }
        return response()->json(['roles' => $roles]);
    }

    
}


