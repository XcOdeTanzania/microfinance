<?php

namespace App\Listeners;

use App\Events\GroupCreatedEvent;
use App\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GroupPendingApprovalTaskListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GroupCreatedEvent  $event
     * @return void
     */
    public function handle(GroupCreatedEvent $event)
    {
        $task = new Task();
        $task->name = 'group pending approval';
        $task->user_id = $event->user_id;
        $task->branch_id = $event->branch_id;
        $task->status = 'pending';

        $event->group->task()->save($task); 
    }
}
