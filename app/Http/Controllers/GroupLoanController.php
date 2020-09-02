<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupLoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupLoanLoanController extends Controller
{

    //get GroupLoan
    public function getGroupLoans()
    {
        $grouploans = GroupLoan::all();

        //    foreach ($grouploans as $key => $grouploan) {
        //     $grouploan->clients = $grouploan->clients;
        // }

        return response()->json(['grouploans' => $grouploans], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all GroupLoan
    public function getGroupLoan($grouploanId)
    {
        $grouploan = GroupLoan::find($grouploanId);
        if (!$grouploan) return response()->json(['error' => 'GroupLoan not found']);

        return response()->json(['grouploan' => $grouploan], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Business
    public function postGroupLoan(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'group_id' => 'required',
                'amount' => 'required',

            ]
        );


        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $group = Group::find($request->group_id);

        if (!$group) return  response()->json(['error', 'Group does not exist']);


        $grouploan = new GroupLoan();

        $grouploan->amount = $request->amount;


        $group->grouploans()->save($grouploan);

        return response()->json(['grouploan' => $grouploan]);
    }


    // put GroupLoan
    public function putGroupLoan(Request $request, $grouploanId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'amount' => 'required',

            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $grouploan = GroupLoan::find($grouploanId);
        if (!$grouploan) return response()->json(['error' => 'GroupLoan not found']);

        $grouploan->update([
            'amount' => $request->amount,

        ]);

        return response()->json(['grouploan' => $grouploan], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete GroupLoan
    public function deleteGroupLoan($grouploanId)
    {
        $grouploan = GroupLoan::find($grouploanId);
        if (!$grouploan) return response()->json(['error' => 'GroupLoan not found']);

        $grouploan->delete();
        return response()->json(['message' => 'GroupLoan deleted successfully']);
    }
}
