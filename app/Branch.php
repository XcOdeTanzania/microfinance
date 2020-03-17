<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class Branch extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'company_id'
    ];


    // relations

    /** 
     * branch has many client relations
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    /** 
     * branch has many groups relations
     */

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    /** 
     * branch belongs to a company relations
     */

    public function company()
    {
        return $this->belongsTo(company::class);
    }



    // Business Logic



    /**
     *  A fucntion to Create a branch 
     * 
     * @param Request $request used to pass request  body
     * @param Company $company used to pass company instance
     * 
     * @return void
     */
    public function postBranch(Request $request, Company $company)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'location' => 'required',

            ]
        );

        if ($validator->fails())
        return back()->with('error', $validator->errors());

        $branch = new Branch();

        $branch->name = $request->branch_name;
        $branch->location = $request->branch_location;
        $branch->company_id = 1;

        $company->branches()->save($branch);
    }
}
