<?php

namespace App\Listeners;

use App\Events\LoanCreatedEvent;
use App\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoanPendingFirstApprovalTaskListener
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
     * @param  LoanCreatedEvent  $event
     * @return void
     */
    public function handle(LoanCreatedEvent $event)
    {
        $task = new Task();
        $task->name = 'Loan pending first approval';
        $task->user_id = $event->user_id;
        $task->branch_id = $event->branch_id;
        $task->status = 'pending';

        $event->loan->task()->save($task);
    }
}
