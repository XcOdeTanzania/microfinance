<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\User;

class GroupController extends Controller
{
    public function groupsPage(){

        $roleName = "Loan Officer";

        $branches = Branch::all();
        
        $users = User::whereHas("roles", function($query) use ($roleName) {
            $query->where("name", "=", $roleName);
        })->get();

        // dd($users)

        return view('pages.groups.groups', ["branches" => $branches]);
    }

    public function centersPage(){
        return view('pages.groups.centers');
    }

    public function transferPage(){
        return view('pages.groups.transfer');
    }
}
