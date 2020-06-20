<?php

namespace App\Listeners;

use App\Events\CreatedRentEvent;
use App\Events\DisbursedLoanEvent;
use App\RentAccount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateRentAccountListener
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
     * @param  DisbursedLoanEvent  $event
     * @return void
     */
    public function handle(DisbursedLoanEvent $event)
    {
        $rentAccount = new RentAccount();
        $rentAccount->balance_due = $event->loan->amount;
        $event->loan->rentAccounts()->save($rentAccount);

        event(new CreatedRentEvent($rentAccount, $event->loan->id, 0));
    }
}
