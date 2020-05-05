<?php

namespace App\Listeners;

use App\Events\BusinessCreatedEvent;
use App\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BusinessPendingApprovalTaskListener
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
     * @param  BusinessCreatedEvent  $event
     * @return void
     */
    public function handle(BusinessCreatedEvent $event)
    {
        $task = new Task();
        $task->name = 'business pending approval';
        $task->user_id = $event->user_id;
        $task->branch_id = $event->branch_id;
        $task->status = 'pending';

        $event->business->task()->save($task);
    }
}
