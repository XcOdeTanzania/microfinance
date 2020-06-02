<?php

namespace App\Listeners;

use App\Events\ClientCreatedEvent;
use App\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClientPendingApprovalTaskListener
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
     * @param  ClientCreatedEvent  $event
     * @return void
     */
    public function handle(ClientCreatedEvent $event)
    {
        $task = new Task();
        $task->name = 'client pending approval';
        $task->user_id = $event->user_id;
        $task->branch_id = $event->branch_id;
        $task->status = 'pending';

        $event->client->task()->save($task);
    }
}
