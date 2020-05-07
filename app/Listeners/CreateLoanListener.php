<?php

namespace App\Listeners;

use App\Events\CreateLoanEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateLoanListener
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
     * @param  CreateLoanEvent  $event
     * @return void
     */
    public function handle(CreateLoanEvent $event)
    {
        //
    }
}
