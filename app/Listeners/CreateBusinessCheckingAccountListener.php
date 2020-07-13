<?php

namespace App\Listeners;

use App\BusinessCheckingAccount;
use App\Events\CreatedRentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateBusinessCheckingAccountListener
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
     * @param  CreatedRentEvent  $event
     * @return void
     */
    public function handle(CreatedRentEvent $event)
    {
        $businessCheckingAccount = new BusinessCheckingAccount();
        $businessCheckingAccount->loan_id = $event->loan_id;
        $businessCheckingAccount->pay_balance = $event->pay_balance;

        $event->rent->businessCheckingAccount()->save($businessCheckingAccount);
    }
}
