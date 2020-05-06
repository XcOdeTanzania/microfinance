<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{

    //get Branch
    public function getBranches()
    {
        $branches = Branch::all();

        foreach ($branches as $key => $branch) {
            $branch->groups = $branch->groups;
        }

        return response()->json(['branches' => $branches], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Branch
    public function getBranch($branchId)
    {

        $branch = Branch::find($branchId);
        if (!$branch) return response()->json(['error' => 'Branch not found']);

        return response()->json(['branch' => $branch], 200, [], JSON_NUMERIC_CHECK);
    }

    public function postBranch(Request $request, $companyId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'region' => 'required',
                'district' => 'required',
                'street' => 'required',
                'phone_number' => 'required',
                'post_code' => 'required',
                'email' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $company = Company::find($companyId);
        if (!$company) return response()->json(['error' => 'Company not found']);


        $branch = new Branch();

        $branch->name = $request->name;
        $branch->region = $request->region;
        $branch->district = $request->district;
        $branch->street = $request->street;
        $branch->phone_number = $request->phone_number;
        $branch->post_code = $request->post_code;
        $branch->email = $request->email;

        $company->branches()->save($branch);

        return response()->json(['company' => $branch]);
    }


    // put Branch
    public function putBranch(Request $request, $branchId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'region' => 'required',
                'district' => 'required',
                'street' => 'required',
                'phone_number' => 'required',
                'post_code' => 'required',
                'email' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $branch = Branch::find($branchId);
        if (!$branch) return response()->json(['error' => 'Branch not found']);

        $branch->update([
            'name' => $request->name,
            'region' => $request->region,
            'district' => $request->district,
            'street' => $request->street,
            'phone_number' => $request->phone_number,
            'post_code' => $request->post_code,
            'email' => $request->email,
        ]);

        return response()->json(['branch' => $branch], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Branch
    public function deleteBranch($branchId)
    {
        $branch = Branch::find($branchId);
        if (!$branch) return response()->json(['error' => 'Branch not found']);

        $branch->delete();
        return response()->json(['message' => 'Branch deleted successfully']);
    }
}
