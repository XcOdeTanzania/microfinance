<?php

namespace App\Listeners;

use App\Events\DisbursedLoanEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateAccountListener
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

        $event->account->update([
            'balance' => $event->account->balance - $event->loan->amount,
        ]);
    }
}
