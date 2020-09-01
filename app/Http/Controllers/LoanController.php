<?php

namespace App\Http\Controllers;

use App\Account;
use App\Events\DisbursedLoanEvent;
use App\Loan;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{


    public function getLoans($status)
    {

        $loans = Loan::all();
        if ($status != 'all') {

            $loans = $loans->map(function ($loan) {
                return $loan;
            })
                ->reject(function ($loan) use ($status) {
                    return $loan->status != $status;
                })->values();
        }



        foreach ($loans as $loan) {
            $loan->guarantors;
            $loan->user;
            $loan->collaterals;
            $loan->charges;
            $loan->repayments;
        }
        return response()->json([
            'loans' => $loans,
        ], 200, [], JSON_NUMERIC_CHECK);
    }


    //get all Loan
    public function getLoan($loanId)
    {



        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->loanable;
        $loan->repayments;
        $loan->schedules;

        return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
    }

    //post loan
    public function postLoan(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'product_id' => 'required',
                'status' => 'required',
                'amount' => 'required',
                'duration' => 'required',
                'disbursement_date' => 'required',
                'repayment_start_date' => 'required',
                'repayment_end_date' => 'required',
                'amount_refund_per_month' => 'required',
                'loan_officer_id' => 'required',
                'account_id' => 'required',
                'client_id' => 'required',


            ]
        );
        $loan_form = null;

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);


        $product = Product::find($request->product_id);

        if (!$product) return response()->json(['error' => 'Product not found']);

        $hostname = URL::to('/');
        $avatar = $hostname . Storage::url('uploads/loan_forms/default.png');
        $destinationPath = storage_path('/app/public/uploads/loan_forms');
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time() . $this->generateRandomString() . '.png';
            $image->move($destinationPath, $name);
            $loan_form  = $hostname . Storage::url('uploads/loan_forms/' . $name);
        }

        $loan = new Loan();
        $loan->amount = $request->amount;
        $loan->status = $request->status;
        $loan->interest = $request->amount * $product->interest_rate;
        $loan->duration = $request->duration;
        $loan->disbursement_date = $request->disbursement_date;
        $loan->repayment_start_date = $request->repayment_start_date;
        $loan->repayment_end_date = $request->repayment_end_date;
        $loan->amount_refund_per_month = $request->amount_refund_per_month;
        $loan->user_id = $request->loan_officer_id;
        $loan->account_id = $request->account_id;
        $loan->client_id = $request->client_id;
        $loan->group_loan_id = $request->group_loan_id;
        $loan->loan_form = $loan_form;


        $product->loans()->save($loan);

        return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
    }

    // put Loan
    public function putLoan(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
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
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($businessId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->update([
            'status' => $request->status,
            'amount' => $request->amount,
            'orign_of_funding' => $request->orign_of_funding,
            'duration' => $request->duration,
            'repayment_every' => $request->repayment_every,
            'repayment_every_type' => $request->repayment_every_type,
            'purpose' => $request->purpose,
            'auto_create_standing_instruction' => $request->auto_create_standing_instruction,
            'sector' => $request->sector,
            'channel' => $request->channel
        ]);

        return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
    }

    public function approveLoan($loanId, $status)
    {
        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->update([
            'status' => $status
        ]);

        return response()->json(['loan' => $loan], 204, [], JSON_NUMERIC_CHECK);
    }

    //delete Loan
    public function deleteLoan($loanId)
    {
        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        $loan->delete();
        return response()->json(['message' => 'Loan deleted successfully']);
    }


    //disburse loans
    public function disburseLoan(Request $request, $loanId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'account_id' => 'required',

            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $account = Account::find($request->account_id);
        if (!$account) return response()->json(['error' => 'Account not found']);


        $loan = Loan::find($loanId);
        if (!$loan) return response()->json(['error' => 'Loan not found']);

        if ($loan->amount > $account->balance)  return response()->json(['error' => 'The loan could not be disbursed', 'reason' => $account->name . ' has insurfficeint balance'], 200, [], JSON_NUMERIC_CHECK);

        if ($loan->status == 'Awaiting Disbursement') {

            $loan->update([
                'status' => 'Active',
                'account_id' => $account->id
            ]);
            event(new DisbursedLoanEvent($loan, $account));

            $loan->rentAccounts;
            $loan->repayments;
            $loan->businessChecking;
            return response()->json(['loan' => $loan], 200, [], JSON_NUMERIC_CHECK);
        }
        return response()->json(['error' => 'The loan could not be disbursed', 'reason' => $loan->status], 200, [], JSON_NUMERIC_CHECK);
    }


    public  function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
