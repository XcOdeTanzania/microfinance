<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Business extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'business_name',
        'business_type',
        'start_date',
        'business_region_id',
        'business_address',
        'business_postal_code',
        'business_revenue',
        'business_expenses',
        'business_net_income'
    ];

    protected $dates = [
        'deleted_at'
    ];


    // relations

    /**
     * business belongs to client relation
     */

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Business Logic

    public function postBusiness(Request $request,Client $client){
        $validator = Validator::make(
            $request->all(),[
        'name'=>'required',
        'type' =>'required',
        'date_of_start' =>'required',
        'address' =>'required',
        'post_code' =>'required',
        'business_revenue' =>'required',
        'expenses' =>'required',
        'net_income' =>'required'
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());

        
            $business = new Business();

            $business->name = $request->name;
            $business->type  = $request->type;
            $business->date_of_start  = $request->date_of_start;
            $business->address  = $request->address;
            $business->post_code  = $request->post_code;
            $business->business_revenue = $request->business_revenue;
            $business->expenses = $request->expenses;
            $business->net_income  = $request->net_income;

            $client->business()->save($business);

    }
}
