<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function pendingApprovalPage()
    {
        return view('pages.task.pendingApproval');
    }

    public function myActionsPage()
    {
        return view('pages.task.myActions');
    }


}
