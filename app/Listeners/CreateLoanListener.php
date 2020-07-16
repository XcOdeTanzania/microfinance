<?php

namespace App\Listeners;

use App\Events\CreateLoanEvent;
use App\Loan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make(
            $event->request->all(),
            [
                'loan_type_id' => 'required',
                'status' => 'required',
                'amount' => 'required',
                'orign_of_funding' => 'required',
                'duration' => 'required',
                'repayment_every' => 'required',
                'repayment_every_type' => 'required',
                'purpose' => 'required',
                'auto_create_standing_instruction' => 'required',
                'sector' => 'required',
                'channel' => 'required',
                'user_id' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);


        $loan = new Loan();
        $loan->loan_type_id = $event->request->loan_type_id;
        $loan->status = $event->request->status;
        $loan->amount = $event->request->amount;
        $loan->orign_of_funding = $event->request->orign_of_funding;
        $loan->duration = $event->request->duration;
        $loan->repayment_every = $event->request->repayment_every;
        $loan->repayment_every_type = $event->request->repayment_every_type;
        $loan->disbursement_date = $event->request->disbursement_date;
        $loan->grace_on_interest_payment = $event->request->grace_on_interest_payment;
        $loan->grace_on_principal_payment = $event->request->grace_on_principal_payment;
        $loan->purpose = $event->request->purpose;
        $loan->auto_create_standing_instruction = $event->request->auto_create_standing_instruction;
        $loan->repayment_start_date = $event->request->repayment_start_date;
        $loan->sector = $event->request->sector;
        $loan->channel = $event->request->channel;
        $loan->user_id = $event->request->user_id;


        $event->loan_owner->loans()->save($loan);


        return $loan;
    }
}
