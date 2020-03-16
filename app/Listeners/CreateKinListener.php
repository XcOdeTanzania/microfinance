<?php

namespace App\Listeners;

use App\Events\ClientCreatedEvent;
use App\Kin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class CreateKinListener
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
        $kin = new Kin;
        $kin->postKin($event->request, $event->client);
    }
}
