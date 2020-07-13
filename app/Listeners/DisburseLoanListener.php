<?php

namespace App\Listeners;

use App\Events\DisburseLoanEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DisburseLoanListener
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
     * @param  DisburseLoanEvent  $event
     * @return void
     */
    public function handle(DisburseLoanEvent $event)
    {
        //
    }
}
