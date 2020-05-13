<?php

namespace App\Listeners;

use App\Events\SaveScheduleEvent;
use App\Loan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveScheduleListener
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
     * @param  SaveScheduleEvent  $event
     * @return void
     */
    public function handle(SaveScheduleEvent $event)
    {
        $event->loan->schedules()->save($event->schedule);
    }
}
