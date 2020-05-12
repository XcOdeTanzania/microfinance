<?php

namespace App\Http\Controllers;

use App\Guarantor;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuarantorController extends Controller
{
     //get Guarantor
     public function getGuarantors()
     {
         $guarantor = Guarantor::all();
 
         return response()->json(['guarantor' => $guarantor], 200, [], JSON_NUMERIC_CHECK);
     }
 
     //get all Guarantor
     public function getGuarantor($guarantorId)
     {
 
         $guarantor = Guarantor::find($guarantorId);
         if (!$guarantor) return response()->json(['error' => 'Guarantor not found']);
 
         return response()->json(['guarantor' => $guarantor], 200, [], JSON_NUMERIC_CHECK);
     }
 
     //Post Guarantor
     public function postGuarantor(Request $request, $loanId)
     {
 
         $validator = Validator::make(
             $request->all(),
             [
                 'first_name' => 'required',
                 'last_name' => 'required',
                 'date_of_birth' => 'required',
                 'address' => 'required',
                 'city' => 'required',
                 'state' => 'required',
                 'postal_code' => 'required',
                 'country' => 'required',
                 'phone_number' => 'required',
                 'relationship' => 'required',
             ]
         );
 
         if ($validator->fails())
             return response()->json(['error', $validator->errors()]);
 
         $loan = Loan::find($loanId);
 
         if (!$loan) return  response()->json(['error', 'Loan does not exist']);
 
         $guarantor = new Guarantor();
 
         $guarantor->first_name = $request->first_name;
         $guarantor->last_name = $request->last_name;
         $guarantor->date_of_birth = $request->date_of_birth;
         $guarantor->address = $request->address;
         $guarantor->city = $request->city;
         $guarantor->state = $request->state;
         $guarantor->postal_code = $request->postal_code;
         $guarantor->country = $request->country;
         $guarantor->phone_number = $request->phone_number;
         $guarantor->relationship = $request->relationship;
 
         if (!$request->hasFile('file')) response()->json(['error', 'Identity attachment is required']);
 
         $path = $request->file('file')->store('file');
         $guarantor->image = env("APP_URL", "local") . ":8000/api/" . $path;
 
 
         $loan->guarantors()->save($guarantor);
 
         return  response()->json(['guarantors' => $guarantor]);
     }
 
     // put Guarantor
     public function putGuarantor(Request $request, $identificationId)
     {
         $validator = Validator::make(
             $request->all(),
             [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postal_code' => 'required',
                'country' => 'required',
                'phone_number' => 'required',
                'relationship' => 'required',
             ]
         );
         if ($validator->fails())
             return response()->json(['error', $validator->errors()]);
 
         $guarantor = Guarantor::find($identificationId);
         if (!$guarantor) return response()->json(['error' => 'Guarantor not found']);
 
         $guarantor->update([
             'first_name' => $request->first_name,
             'last_name' => $request->last_name,
             'date_of_birth' => $request->date_of_birth,
             'address' => $request->address,
             'city' => $request->city,
             'state' => $request->state,
             'postal_code' => $request->postal_code,
             'country' => $request->country,
             'phone_number' => $request->phone_number,
             'relationship' => $request->relationship,
         ]);
 
         return response()->json(['guarantor' => $guarantor], 200, [], JSON_NUMERIC_CHECK);
     }
 
     //delete Guarantor
     public function deleteGuarantor($identificationId)
     {
         $guarantor = Guarantor::find($identificationId);
         if (!$guarantor) return response()->json(['error' => 'Guarantor not found']);
 
         $guarantor->delete();
         return response()->json(['message' => 'Guarantor deleted successfully']);
     }
 
}
