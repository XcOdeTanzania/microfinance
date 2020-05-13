<?php

namespace App\Listeners;

use App\Events\CreateScheduleEvent;
use App\Events\SaveScheduleEvent;
use App\Schedule;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateScheduleListener
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
     * @param  CreateScheduleEvent  $event
     * @return void
     */
    public function handle(CreateScheduleEvent $event)
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

        

        $number_of_times_to_pay = number_format($loan->duration / $loan->repayment_every);
        // dd($number_of_times_to_pay);
        $payment = $loan->amount / $number_of_times_to_pay;
        // dd($payment);
        $date = Carbon::parse($loan->disbursement_date);

        switch ($loan->repayment_every_type) {
            case 'days':
                for ($i = 0; $i < $number_of_times_to_pay; $i++) {
                    $schedule = new Schedule();
                    $schedule->day = $weekMap[$date->dayOfWeek];
                    $date = $schedule->date = $date->addDays($loan->repayment_every);
                    $schedule->amount = $payment;
                    $payment = $payment;

                    $loan->schedules()->save($schedule);
                }

                break;

            case 'weeks':
                for ($i = 0; $i < $number_of_times_to_pay; $i++) {
                    $schedule = new Schedule();
                    $schedule->day = $weekMap[$date->dayOfWeek];
                    $date = $schedule->date = $date->addWeeks($loan->repayment_every);
                    $schedule->amount = $payment;
                    $payment = $loan->amount - $payment;

                    $loan->schedules()->save($schedule);
                }
                break;

            case 'months':
                for ($i = 0; $i < $number_of_times_to_pay; $i++) {

                    $schedule = new Schedule();
                    $schedule->day = $weekMap[$date->dayOfWeek];
                    $date = $schedule->date = $date->addMonths($loan->repayment_every);
                    if ($i < $number_of_times_to_pay - 1)
                        $schedule->amount = $payment;
                    else
                        $schedule->amount = $amount;
                    $amount = $amount - $payment;

                    event(new SaveScheduleEvent($loan, $schedule));
                    echo ($i);
                    echo ($schedule);
                }
                break;
            case 'years':
                for ($i = 0; $i < $number_of_times_to_pay; $i++) {
                    $schedule = new Schedule();
                    
                    $schedule->day = $weekMap[$date->dayOfWeek];
                    $date = $schedule->date = $date->addYears($loan->repayment_every);
                    $schedule->amount = $payment;
                    $payment = $loan->amount - $payment;

                    $loan->schedules()->save($schedule);
                }
                break;

            default:
                return response()->json(['error' => 'There are alot of errors']);
                break;
        }
    }
}
