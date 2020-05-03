<?php

namespace App\Http\Controllers;

use App\Business;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    //get Business
    public function getBusinesses()
    {
        $businesss = Business::all();

        return response()->json(['businesses' => $businesss], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Business
    public function getBusiness($indentificationId)
    {

        $business = Business::find($indentificationId);
        if (!$business) return response()->json(['error' => 'Business not found']);

        return response()->json(['business' => $business], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Business
    public function postBusiness(Request $request, $clientId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'start_date' => 'required',
                'address' => 'required',
                'post_code' => 'required',
                'revenue' => 'required',
                'expenses' => 'required',
                'net_income' => 'required',
                'region' => 'required'
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $client = Client::find($clientId);

        if (!$client) return  response()->json(['error', 'Client does not exist']);


        $business = new Business();

        $business->name = $request->name;
        $business->type  = $request->type;
        $business->start_date  = $request->start_date;
        $business->address  = $request->address;
        $business->post_code  = $request->post_code;
        $business->revenue = $request->revenue;
        $business->expenses = $request->expenses;
        $business->net_income  = $request->net_income;
        $business->region = $request->region;

        $client->businesses()->save($business);
        return response()->json(['business' => $business]);
    }



    // put Business
    public function putBusiness(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
                'start_date' => 'required',
                'address' => 'required',
                'post_code' => 'required',
                'revenue' => 'required',
                'expenses' => 'required',
                'net_income' => 'required',
                'region' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $business = Business::find($businessId);
        if (!$business) return response()->json(['error' => 'Business not found']);

        $business->update([
            'name' => $request->name,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'address' => $request->address,
            'post_code' => $request->post_code,
            'revenue' => $request->revenue,
            'expenses' => $request->expenses,
            'net_income' => $request->net_income,
            'region' => $request->region,
        ]);

        return response()->json(['business' => $business], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Business
    public function deleteBusiness($businessId)
    {
        $business = Business::find($businessId);
        if (!$business) return response()->json(['error' => 'Business not found']);

        $business->delete();
        return response()->json(['message' => 'Business deleted successfully']);
    }
}
