<?php

namespace App\Http\Controllers;

use App\Events\CreateRentEvent;
use App\Loan;
use App\RentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RentAccountController extends Controller
{
    public function allRentAccounts()
    {
        $rentAccounts = RentAccount::all();
        foreach ($rentAccounts as $rentAccount) {

            $rentAccount->businessCheckingAccount;
            // $rentAccount->officer = User::find($rentAccount->user_id);
            // $rentAccount->performed_by = User::find($rentAccount->user_id);

            // $rentAccount->entity = $rentAccount->rentAccountable_type::find($rentAccount->rentAccountable_id);
        }

        return response()->json(['rentAccounts' => $rentAccounts]);
    }


    //get all RentAccount
    public function getRentAccount($rentAccountId)
    {

        $rentAccount = RentAccount::find($rentAccountId);
        if (!$rentAccount) return response()->json(['error' => 'RentAccount not found']);

        return response()->json(['rentAccount' => $rentAccount], 200, [], JSON_NUMERIC_CHECK);
    }


    // put RentAccount
    public function postRentAccount(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'balance_due' => 'required',
                'loan_id' => 'required',
                'pay_balance' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($request->loan_id);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $rentAccount = new RentAccount();
        $rentAccount->balance_due = $request->balance_due;
        $loan->rentAccounts()->save($rentAccount);

        event(new CreateRentEvent($rentAccount, $request));

        return response()->json(['rentAccount' => $rentAccount], 200, [], JSON_NUMERIC_CHECK);
    }




    // put RentAccount
    public function putRentAccount(Request $request, $rentAccountId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'balance_due' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $rentAccount = RentAccount::find($rentAccountId);
        if (!$rentAccount) return response()->json(['error' => 'RentAccount not found']);

        $rentAccount->update([
            'balance_due' => $request->status
        ]);

        return response()->json(['rentAccount' => $rentAccount], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete RentAccount
    public function deleteRentAccount($rentAccountId)
    {
        $rentAccount = RentAccount::find($rentAccountId);
        if (!$rentAccount) return response()->json(['error' => 'RentAccount not found']);

        $rentAccount->delete();
        return response()->json(['message' => 'RentAccount deleted successfully']);
    }
}
