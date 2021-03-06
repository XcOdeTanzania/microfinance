<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{

    public function allTasks()
    {
        $tasks = Task::all();
        foreach ($tasks as $task) {
            $task->officer = User::find($task->user_id);
            $task->performed_by = User::find($task->user_id);
            $task->branch;
            // $task->user;
            $task->entity = $task->taskable_type::find($task->taskable_id);
        }

        return response()->json(['tasks' => $tasks]);
    }


    //get all Task
    public function getTask($taskId)
    {

        $task = Task::find($taskId);
        if (!$task) return response()->json(['error' => 'Task not found']);

        return response()->json(['task' => $task], 200, [], JSON_NUMERIC_CHECK);
    }




    // put Task
    public function putTask(Request $request, $taskId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'status' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $task = Task::find($taskId);
        if (!$task) return response()->json(['error' => 'Task not found']);

        $task->update([
            'status' => $request->status
        ]);

        return response()->json(['task' => $task], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Task
    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);
        if (!$task) return response()->json(['error' => 'Task not found']);

        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
