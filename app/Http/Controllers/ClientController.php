<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Client;
use App\Clients;
use App\District;
use App\Events\ClientCreatedEvent;
use App\Region;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    //get client
    public function getClients($status)
    {
        $clients = Client::all();

        if ($status != 'all') {

            $clients =  $clients->map(function ($client) {
                return $client;
            })->reject(function ($client) use ($status) {
                return $client->status != $status;
            })->values();
        }
        foreach ($clients as $key => $client) {
            $client->branch = $client->branch;
             
        }

        // foreach ($branch->officers as $key => $officer) 

        return response()->json(
            ['clients' => $clients],
            200,
            [],
            JSON_NUMERIC_CHECK
        );
    }

    //get all clients
    public function getClient($clientId)
    {

        $client = Client::find($clientId);
        if (!$client) return response()->json(['error' => 'Client not found']);

        return response()->json(['client' => $client], 200, [], JSON_NUMERIC_CHECK);
    }

    /// post client
    public function postClient(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'email' => 'unique:clients,email| email',
                'last_name' => 'required',
                'registration_date' => 'required',
                'phone_number' => 'required',
                'date_birth' => 'required',
                'gender' => 'required',
                'street' => 'required',
                'district' => 'required',
                'region' => 'required',
                'marital_status' => 'required',
                'branch_id' => 'required'
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $branch = Branch::find($request->branch_id);
        if (!$branch) return response()->json(['error' => 'Brach not found']);

        $client = new Client();

        $client->first_name = $request->first_name;
        $client->middle_name = $request->middle_name;
        $client->last_name = $request->last_name;
        $client->registration_date =  $request->registration_date;
        $client->phone_number = $request->phone_number;
        $client->date_birth = $request->date_birth;
        $client->gender = $request->gender;
        $client->street = $request->street;
        $client->district = $request->district;
        $client->region = $request->region;
        $client->email = $request->client_email;
        $client->marital_status = $request->marital_status;
        $client->password = Hash::make($request->last_name);

        $client->status = 'pending';

        $branch->clients()->save($client);

        return response()->json(['clients' => $client], 200, [], JSON_NUMERIC_CHECK);
    }

    // put client
    public function putClient(Request $request, $clientId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'email' => 'unique:clients,email| email',
                'last_name' => 'required',
                'registration_date' => 'required',
                'phone_number' => 'required',
                'date_birth' => 'required',
                'gender' => 'required',
                'street' => 'required',
                'district' => 'required',
                'region' => 'required',
                'marital_status' => 'required',

            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $client = Client::find($clientId);
        if (!$client) return response()->json(['error' => 'User not found']);


        $client->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'registration_date' =>  $request->registration_date,
            'phone_number' => $request->phone_number,
            'date_birth' => $request->date_birth,
            'gender' => $request->gender,
            'street' => $request->street,
            'district' => $request->district,
            'region' => $request->region,
            'email' => $request->client_email,
            'marital_status' => $request->marital_status,
        ]);


        return response()->json(['client' => $client], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete client
    public function deleteClient($clientId)
    {
        $client = Client::find($clientId);
        if (!$client) return response()->json(['error' => 'Client not found']);

       $client->delete();
       return response()->json(['message' => 'Client deleted successfully']);
    }
}
