<?php

namespace App\Listeners;

use App\Events\DisbursedLoanEvent;
use App\LoanType;
use App\Schedule;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class CreateLoanPaymentScheduleListener
{
    public  $weekMap = [
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wenesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
    ];
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

        $loan = $event->loan;


        $loanType = LoanType::find($loan->loan_type_id);
        $payment =  $loan->amount / $loanType->max_duration;

        $this->createSchedule($loan, $payment, $loanType->max_duration, $loanType->duration_type);
    }

    public function createSchedule($loan, $payment, $duration, $duration_type)
    {


        $date = Carbon::parse($loan->disbursement_date);
        // $payment = $loan->amount / number_format($loan->duration);
        for ($i = 0; $i < number_format($duration); $i++) {



            $schedule = new Schedule();
            $schedule->day = $this->weekMap[$date->dayOfWeek];

            if ($duration_type == 'days')
                $date = $schedule->date =  $date->addDays(1);
            if ($duration_type == 'weeks')
                $date = $schedule->date =  $date->addWeeks(1);
            if ($duration_type == 'months')
                $date = $schedule->date =  $date->addMonths(1);
            if ($duration_type == 'years')
                $date = $schedule->date =  $date->addYears(1);

            ///this will need fixing for decimal amounts
            $schedule->amount = $payment;


            $loan->schedules()->save($schedule);
        }
    }
}
