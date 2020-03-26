<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'branch_id',
        'account_number',
        'uid',
        'status_id',
        'activation_date',
        'meeting_day',
        'meeting_location',
        'meeting_frequency'
    ];


    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * Group has many client relation
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Group belongs to a branch
     */

    public function branch()
    {
        return $this->belongsTo(Group::class);
    }


    /**
     * Loan polymorphic to group.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }


    /**
     * Group report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // Business Logic

    // create new group function

    public function postGroup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'branch_id' => 'required',
            'account_number' => 'required',
            'uid' => 'required',
            'status_id' => 'required',
            'activation_date' => 'required',
            'meeting_day' => 'required',
            'meeting_location' => 'required',
            'meeting_frequency' => 'required'
        ]);

        if ($validator->fails())
            return redirect('/')->with('error', $validator->errors());

        $group = new Group();

        $group->name = $request->name;
        $group->branch_id = $request->branch_id;
        $group->account_number = $request->account_number;
        $group->uid = $request->uid;
        $group->status_id = $request->status_id;
        $group->activation_date = $request->activation_date;
        $group->meeting_day = $request->meeting_day;
        $group->meeting_location = $request->meeting_location;
        $group->meeting_frequency = $group->meeting_frequency;

        $group->save();
    }

    // edit group function

    public function editGroup(Request $request, $group_id)
    {
        $group = Group::find($group_id);

        if (!$group)
            return redirect('/groups/groups')->with('error', 'group not found');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'branch_id' => 'required',
            'account_number' => 'required',
            'uid' => 'required',
            'status_id' => 'required',
            'activation_date' => 'required',
            'meeting_day' => 'required',
            'meeting_location' => 'required',
            'meeting_frequency' => 'required'
        ]);

        if ($validator->fails())
            return redirect('/')->with('error', $validator->errors());

        $group->name = $request->name;
        $group->branch_id = $request->branch_id;
        $group->account_number = $request->account_number;
        $group->uid = $request->uid;
        $group->status_id = $request->status_id;
        $group->activation_date = $request->activation_date;
        $group->meeting_day = $request->meeting_day;
        $group->meeting_location = $request->meeting_location;
        $group->meeting_frequency = $group->meeting_frequency;

        $group->save();
    }


    // delete group function

    public function deleteGroup($group_id)
    {
        $group = Group::find($group_id);

        if (!$group)
            return redirect('/groups/groups')->with('error', 'group not found');

        $group->delete();
    }


    // task relations

 public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}
