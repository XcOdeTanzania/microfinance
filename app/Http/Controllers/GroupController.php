<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\User;
use App\Group;

class GroupController extends Controller
{
    public function groupsPage(){

        $roleName = "Loan Officer";

        $groups = Group::all();

        $branches = Branch::all();

        $approved_groups = $groups->filter(function ($item) {
            if ($item->status == 'approved') {
                $item->loan;
                $item->userLoan;
                $item->branch = Branch::where('id','like',$item->branch_id)->get();
                return $item;
            }
        });

        return response()->json([
            "data" => $approved_groups
        ]);

        $closed_groups = $groups->filter(function ($item) {
            if ($item->status == 'closed') return $item;
        });

        $pending_approval_groups = $groups->filter(function ($item) {
            if ($item->status == 'pendingApproval') return $item;
        });

        foreach ($branches as $branch) {
            foreach ($branch->users as $user) {
                $user->roles;
                $user = null;
            }
        }

        // dd($branches);
        
        

        // dd($users)

        return view('pages.groups.groups',
        ["approvedGroups" => $approved_groups,
        "pendingApprovalGroups" => $pending_approval_groups,
        "closedGroups" => $closed_groups
        ]);
    }


    public function centersPage(){
        return view('pages.groups.centers');
    }

    public function transferPage(){
        return view('pages.groups.transfer');
    }




    public function getUsersByRole($roleName, $branch_id)
    {
        $users = User::whereHas("roles", function($query) use ($roleName) {
            $query->where("name", "=", $roleName);
        })->get();

        return $users->filter(function($item) use ($branch_id) {
            $item->branch_id = $branch_id;
        })->get();
    }
}
