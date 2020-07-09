<?php

namespace App\Listeners;

use App\Events\DisbursedLoanEvent;
use App\Schedule;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class CreateLoanPaymentScheduleListener
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
        $weekMap = [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wenesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
        ];
        $loan = $event->loan;
        $amount = $loan->amount;

        $number_of_times_to_pay = 1;
        if ($loan->repayment_type == 'days')
            $number_of_times_to_pay = number_format($loan->duration);
        if ($loan->repayment_type == 'weeks')
            $number_of_times_to_pay = number_format($loan->duration);
        if ($loan->repayment_type == 'months')
            $number_of_times_to_pay = number_format($loan->duration);
        if ($loan->repayment_type == 'years')
            $number_of_times_to_pay = number_format($loan->duration * 12);


        $payment = $loan->amount / $number_of_times_to_pay;

        $date = Carbon::parse($loan->disbursement_date);
        $repayment_type = $loan->repayment_every_type;


        for ($i = 0; $i < $number_of_times_to_pay; $i++) {

            $schedule = new Schedule();
            $schedule->day = $weekMap[$date->dayOfWeek];


            ///days weeks month and years
            if ($repayment_type == 'days')
                $date = $schedule->date = $date->addDays($loan->repayment_every);
            if ($repayment_type == 'weeks')
                $date = $schedule->date = $date->addWeeks($loan->repayment_every);
            if ($repayment_type == 'months')
                $date = $schedule->date = $date->addMonths($loan->repayment_every);
            if ($repayment_type == 'years')
                $date = $schedule->date = $date->addYears($loan->repayment_every);


            if ($i < $number_of_times_to_pay - 1)
                $schedule->amount = $payment;
            else
                $schedule->amount = $amount;
            $amount = $amount - $payment;

            $loan->schedules()->save($schedule);
        }
    }
}
