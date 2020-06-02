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
        'loan_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'city',
        'state',
        'post_code',
        'country',
        'phone_number',
        'image',
        'relationship'
    ];

    protected $dates =[
        'deleted_at'
    ];


    /**
     * guarantor has many loans.
     */
    public function loans()
    {
        return $this->belongsTo(Loan::class);
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
