<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Events\GroupCreatedEvent;
use App\Group;

use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{

    //get Group
    public function getGroups()
    {
        $groups = Group::all();

        //    foreach ($groups as $key => $group) {
        //     $group->clients = $group->clients;
        // }

        return response()->json(['groups' => $groups], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Group
    public function getGroup($groupId)
    {
        $group = Group::find($groupId);
        if (!$group) return response()->json(['error' => 'Group not found']);

        return response()->json(['group' => $group], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Business
    public function postGroup(Request $request, $branchId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'account_number' => 'required',
                'uuid' => 'required',
                'status' => 'required',
                'activation_date' => 'required',
                'meeting_day' => 'required',
                'meeting_location' => 'required',
                'meeting_frequency' => 'required',

            ]
        );


        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $branch = Branch::find($branchId);

        if (!$branch) return  response()->json(['error', 'Branch does not exist']);


        $group = new Group();

        $group->name = $request->name;
        $group->account_number  = $request->account_number;
        $group->uuid  = $request->uuid;
        $group->status  = $request->status;
        $group->activation_date  = $request->activation_date;
        $group->meeting_day = $request->meeting_day;
        $group->meeting_location = $request->meeting_location;
        $group->meeting_frequency  = $request->meeting_frequency;

        $branch->groups()->save($group);

        //create a task for goup pending approval
        //user_id for someone to approve clients

        event(new GroupCreatedEvent($group, '1', $branch->id));

        return response()->json(['group' => $group]);
    }


    // put Group
    public function putGroup(Request $request, $groupId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'account_number' => 'required',
                'uuid' => 'required',
                'status' => 'required',
                'activation_date' => 'required',
                'meeting_day' => 'required',
                'meeting_location' => 'required',
                'meeting_frequency' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $group = Group::find($groupId);
        if (!$group) return response()->json(['error' => 'Group not found']);

        $group->update([
            'name' => $request->name,
            'account_number' => $request->account_number,
            'uuid' => $request->uuid,
            'status' => $request->status,
            'activation_date' => $request->activation_date,
            'meeting_day' => $request->meeting_day,
            'meeting_location' => $request->meeting_location,
            'meeting_frequency' => $request->meeting_frequency,
        ]);

        return response()->json(['group' => $group], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Group
    public function deleteGroup($groupId)
    {
        $group = Group::find($groupId);
        if (!$group) return response()->json(['error' => 'Group not found']);

        $group->delete();
        return response()->json(['message' => 'Group deleted successfully']);
    }
}
