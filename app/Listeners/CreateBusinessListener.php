<?php

namespace App\Listeners;

use App\Events\ClientCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Business;
class CreateBusinessListener
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
    $business  = new Business;
    $business->postBusiness($event->request, $event->client);
    }
}
