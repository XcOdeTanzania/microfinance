<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Guarantor extends Model
{

    use SoftDeletes;

    protected $fillable =[
        'profile_id',
        'type',
    ];

    protected $dates =[
        'deleted_at'
    ];


    // relations

    /**
     * Get the profile.
     */
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

    /**
     * guarantor has many loans.
     */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }




    // Business Logic 



    public function postGuarantor(Request $request, Loan $loan) {
        

        $validator = Validator::make(
            $request->all(),
            [
                'type' => 'required'
            ]
        );

          
        if ($validator->fails())
            return back()->with('error', $validator->errors());


        $guarantor = new Guarantor();

        $guarantor->type = $request->type; 

        if ($request->type === 'existing') {

        }

    }

}
