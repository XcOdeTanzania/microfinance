<?php

namespace App\Http\Controllers;

use App\Collateral;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CollateralController extends Controller
{
    //get Collateral
    public function getCollaterals()
    {
        $collateral = Collateral::all();

        return response()->json(['collateral' => $collateral], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Collateral
    public function getCollateral($collateralId)
    {

        $collateral = Collateral::find($collateralId);
        if (!$collateral) return response()->json(['error' => 'Collateral not found']);

        return response()->json(['collateral' => $collateral], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Collateral
    public function postCollateral(Request $request, $loanId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'value' => 'required',
                'description' => 'required',

            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $loan = Loan::find($loanId);

        if (!$loan) return  response()->json(['error', 'Loan does not exist']);

        $collateral = new Collateral();

        $collateral->type = $request->type;
        $collateral->value = $request->value;
        $collateral->description = $request->description;


        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('file');
            $collateral->attachment = env("APP_URL", "local") . ":8000/api/" . $path;
        }





        $loan->collaterals()->  save($collateral);

        return  response()->json(['collaterals' => $collateral]);
    }

    // put Collateral
    public function putCollateral(Request $request, $identificationId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required',
                'value' => 'required',
                'description' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $collateral = Collateral::find($identificationId);
        if (!$collateral) return response()->json(['error' => 'Collateral not found']);

        $collateral->update([
            'type' => $request->type,
            'value' => $request->value,
            'description' => $request->description,

        ]);

        return response()->json(['collateral' => $collateral], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Collateral
    public function deleteCollateral($identificationId)
    {
        $collateral = Collateral::find($identificationId);
        if (!$collateral) return response()->json(['error' => 'Collateral not found']);

        $collateral->delete();
        return response()->json(['message' => 'Collateral deleted successfully']);
    }
}
