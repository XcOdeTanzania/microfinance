<?php

namespace App\Listeners;

use App\Events\CreateRentEvent;
use App\Events\DisburseLoanEvent;
use App\RentAccount;
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


        $rentAccount = new RentAccount();
        $rentAccount->balance_due = $event->loan->amount;
        $event->loan->rentAccounts()->save($rentAccount);

        event(new CreateRentEvent($rentAccount, $event->loan->id, 0));
    }
}
