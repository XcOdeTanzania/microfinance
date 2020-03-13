<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupsPage(){
        return view('pages.groups.groups');
    }

    public function centersPage(){
        return view('pages.groups.centers');
    }

    public function transferPage(){
        return view('pages.groups.transfer');
    }
}
