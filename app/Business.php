<?php

namespace App;

<<<<<<< HEAD
use App\Events\ClientCreatedEvent;
use App\Listeners\CreateBusinessListener;
=======
use DateTime;
>>>>>>> 8e26c6be13d3e20ee127272940f2057bcfef461b
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
        'business_name'=>'required',
        'business_type' =>'required',
        'start_date' =>'required',
        'business_address' =>'required',
        'business_postal_code' =>'required',
        'business_revenue' =>'required',
        'business_expenses' =>'required',
        'business_net_income' =>'required'
            ]);

            if($validator->fails())
            return redirect('/client/register')->with('error',$validator->errors());

        
            $business = new Business();

            $business->name = $request->business_name;
            $business->type  = $request->business_type;
            $business->date_of_start  = $request->start_date;
            $business->address  = $request->business_address;
            $business->post_code  = $request->business_postal_code;
            $business->business_revenue = $request->business_revenue;
            $business->expenses = $request->business_expenses;
            $business->net_income  = $request->business_net_income;
            $business->region_id = 1;

            $client->business()->save($business);

<<<<<<< HEAD
            event(new ClientCreatedEvent($request, $client));
=======

>>>>>>> 8e26c6be13d3e20ee127272940f2057bcfef461b

    }
}
