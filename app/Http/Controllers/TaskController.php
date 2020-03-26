<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TasksTableSeeder;
use App\Task;

class TaskController extends Controller {
    public function pendingApprovalPage() {
        return view( 'pages.task.pendingApproval' );
    }

    public function myActionsPage() {
        return view( 'pages.task.myActions' );
    }

    public function allTasks() {
        $tasks = Task::all();

        return response()->json(['tasks' =>$tasks]);
    }



}
