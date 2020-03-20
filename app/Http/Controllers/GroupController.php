<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\User;
use App\Group;
use App\Loan;
use App\Officer;
use App\Role;

class GroupController extends Controller
{
    public function groupsPage()
    {
        $groups = Group::all();

        $branches = Branch::all();

        foreach ($branches as $branch) {
            foreach ($branch->users as $key => $user) {
                if ($user->is('Loan Officer')) {
                    $user->groups;
                    $user->clients;
                } else {
                    unset($branch->users[$key]);
                }

            }
        }

       




       




        // return response()->json([
        //     "branches" => $branches,
        //     "groups" => $groups,
        // ]);



        return view(
            'pages.groups.groups',
            [
                "groups" => $groups,
                "branches" => $branches,

            ]
        );
    }


    public function centersPage()
    {
        return view('pages.groups.centers');
    }

    public function transferPage()
    {
        return view('pages.groups.transfer');
    }




    public function getUsersByRole($roleName, $branch_id)
    {
        $users = User::whereHas("roles", function ($query) use ($roleName) {
            $query->where("name", "=", $roleName);
        })->get();

        return $users->filter(function ($item) use ($branch_id) {
            $item->branch_id = $branch_id;
        })->get();
    }
}
