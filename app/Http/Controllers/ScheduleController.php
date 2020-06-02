<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    //get Schedule
    public function getSchedules()
    {
        $schedule = Schedule::all();

        return response()->json(['schedule' => $schedule], 200, [], JSON_NUMERIC_CHECK);
    }

    //get single loan Schedule
    public function getSingleLoanSchedules($loanId)
    {
        $schedules = Schedule::all();
       
            $schedules = $schedules->map(function ($schedule) {
                return $schedule;
            })
                ->reject(function ($schedule) use ($loanId) {
                    return $schedule->loan_id != $loanId;
                })->values();
        


        return response()->json(['schedules' => $schedules], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Schedule
    public function getSchedule($scheduleId)
    {

        $schedule = Schedule::find($scheduleId);
        if (!$schedule) return response()->json(['error' => 'Schedule not found']);

        return response()->json(['schedule' => $schedule], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Schedule
    public function postSchedule(Request $request, $loanId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'day' => 'required',
                'date' => 'required',
                'amount' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($loanId);

        if (!$loan) return  response()->json(['error', 'Loan does not exist']);

        $schedule = new Schedule();

        $schedule->day = $request->day;
        $schedule->date = $request->date;
        $schedule->amount = $request->amount;

        $loan->schedules()->save($schedule);

        return  response()->json(['schedule' => $schedule]);
    }

    // put Schedule
    public function putSchedule(Request $request, $identificationId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'day' => 'required',
                'date' => 'required',
                'amount' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $schedule = Schedule::find($identificationId);
        if (!$schedule) return response()->json(['error' => 'Schedule not found']);

        $schedule->update([
            'day' => $request->day,
            'date' => $request->date,
            'amount' => $request->amount,
        ]);

        return response()->json(['schedule' => $schedule], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Schedule
    public function deleteSchedule($identificationId)
    {
        $schedule = Schedule::find($identificationId);
        if (!$schedule) return response()->json(['error' => 'Schedule not found']);

        $schedule->delete();
        return response()->json(['message' => 'Schedule deleted successfully']);
    }
}
