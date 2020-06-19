<?php

namespace App\Listeners;

use App\BusinessCheckingAccount;
use App\Events\CreateRentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateRentListener
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
     * @param  CreateRentEvent  $event
     * @return void
     */
    public function handle(CreateRentEvent $event)
    {
        $businessCheckingAccount = new BusinessCheckingAccount();
        $businessCheckingAccount->loan_id = $event->request->loan_id;
        $businessCheckingAccount->pay_balance = $event->request->pay_balance;

        $event->rent->businessCheckingAccount()->save($businessCheckingAccount);

        
    }
}
