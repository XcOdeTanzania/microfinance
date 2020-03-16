<?php

namespace App\Listeners;

use App\Events\ClientCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Profile;

class CreateProfileListener
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
        $profile = new Profile;
         
        $profile->postProfile($event->request,'user', $event->client->user_id);
    }
}
