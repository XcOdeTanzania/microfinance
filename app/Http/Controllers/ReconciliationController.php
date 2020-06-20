<?php

namespace App\Http\Controllers;

use App\Account;
use App\Reconciliation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReconciliationController extends Controller
{
     //get Reconciliation
     public function getReconciliations()
     {
         $reconciliations = Reconciliation::all();
 
         foreach ($reconciliations as $key => $reconciliation) {
             $reconciliation->account;
           
         }
 
         return response()->json(['reconciliations' => $reconciliations], 200, [], JSON_NUMERIC_CHECK);
     }
 
     //get all Reconciliation
     public function getReconciliation($reconciliationId)
     {
 
         $reconciliation = Reconciliation::find($reconciliationId);
         if (!$reconciliation) return response()->json(['error' => 'Reconciliation not found']);
 
         $reconciliation->account;
 
 
         return response()->json(['reconciliation' => $reconciliation], 200, [], JSON_NUMERIC_CHECK);
     }
 
     public function postReconciliation(Request $request, $accountId)
     {
 
         $validator = Validator::make(
             $request->all(),
             [
                 'original_balance' => 'required',
                 'reconciled_balance' => 'required'
             ]
         );
 
         if ($validator->fails())
             return response()->json(['error', $validator->errors()]);
 
         $account = Account::find($accountId);
         if (!$account) return response()->json(['error' => 'account not found']);
 
 
         $reconciliation = new Reconciliation();
 
         $reconciliation->original_balance = $request->original_balance;
         $reconciliation->reconciled_balance = $request->reconciled_balance;
        
         $account->reconciliations()->save($reconciliation);
 
         return response()->json(['reconciliation' => $reconciliation]);
     }
 
 
     // put Reconciliation
     public function putReconciliation(Request $request, $reconciliationId)
     {
         $validator = Validator::make(
             $request->all(),
             [
                 'original_balance' => 'required',
                 'reconciled_balance' => 'required',
                 ]
         );
         if ($validator->fails())
             return response()->json(['error', $validator->errors()]);
 
         $reconciliation = Reconciliation::find($reconciliationId);
         if (!$reconciliation) return response()->json(['error' => 'Reconciliation not found']);
 
         $reconciliation->update([
             'original_balance' => $request->original_balance,
             'reconciled_balance' => $request->reconciled_balance
         ]);
 
         return response()->json(['reconciliation' => $reconciliation], 200, [], JSON_NUMERIC_CHECK);
     }
 
     //delete Reconciliation
     public function deleteReconciliation($reconciliationId)
     {
         $reconciliation = Reconciliation::find($reconciliationId);
         if (!$reconciliation) return response()->json(['error' => 'Reconciliation not found']);
 
         $reconciliation->delete();
         return response()->json(['message' => 'Reconciliation deleted successfully']);
     }
}
