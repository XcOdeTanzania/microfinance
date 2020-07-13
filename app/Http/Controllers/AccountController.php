<?php

namespace App\Http\Controllers;

use App\Account;
use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    //get Account
    public function getAccounts()
    {
        $accounts = Account::all();

        foreach ($accounts as $key => $account) {
            $account->branch;
            $account->reconciliations;
        }

        return response()->json(['accounts' => $accounts], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Account
    public function getAccount($accountId)
    {

        $account = Account::find($accountId);
        if (!$account) return response()->json(['error' => 'Account not found']);

        $account->branch;


        return response()->json(['account' => $account], 200, [], JSON_NUMERIC_CHECK);
    }

    public function postAccount(Request $request, $branchId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'bank_account_no' => 'required',
                'tag' => 'required',
                'usage' => 'required',
                'manual_entries_allowed' => 'required',
                'enable_bank_reconciliation' => 'required',
                'balance' => 'required',
                'unreconciled_balance' => 'required',
                'status' => 'required',

            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $branch = Branch::find($branchId);
        if (!$branch) return response()->json(['error' => 'branch not found']);


        $account = new Account();

        $account->name = $request->name;
        $account->type = $request->type;
        $account->bank_account_no = $request->bank_account_no;
        $account->tag = $request->tag;
        $account->usage = $request->usage;
        $account->manual_entries_allowed = $request->manual_entries_allowed;
        $account->enable_bank_reconciliation = $request->enable_bank_reconciliation;
        $account->balance = $request->balance;
        $account->unreconciled_balance = $request->unreconciled_balance;
        $account->status = $request->status;


        $branch->accounts()->save($account);

        return response()->json(['account' => $account]);
    }


    // put Account
    public function putAccount(Request $request, $accountId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'bank_account_no' => 'required',
                'tag' => 'required',
                'usage' => 'required',
                'manual_entries_allowed' => 'required',
                'enable_bank_reconciliation' => 'required',
                'balance' => 'required',
                'unreconciled_balance' => 'required',
                'status' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $account = Account::find($accountId);
        if (!$account) return response()->json(['error' => 'Account not found']);

        $account->update([
            'name' => $request->name,
            'type' => $request->type,
            'bank_account_no' => $request->bank_account_no,
            'tag' => $request->tag,
            'usage' => $request->usage,
            'manual_entries_allowed' => $request->manual_entries_allowed,
            'enable_bank_reconciliation' => $request->enable_bank_reconciliation,
            'balance' => $request->balance,
            'unreconciled_balance' => $request->reconciled_balance,
            'status' => $request->status,
        ]);

        return response()->json(['account' => $account], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Account
    public function deleteAccount($accountId)
    {
        $account = Account::find($accountId);
        if (!$account) return response()->json(['error' => 'Account not found']);

        $account->delete();
        return response()->json(['message' => 'Account deleted successfully']);
    }
}
