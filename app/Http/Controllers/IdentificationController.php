<?php

namespace App\Http\Controllers;

use App\Client;
use App\Identification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdentificationController extends Controller
{

    //get Identification
    public function getIdentifications()
    {
        $identification = Identification::all();

        return response()->json(['identification' => $identification], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Identification
    public function getIdentification($indentificationId)
    {

        $identification = Identification::find($indentificationId);
        if (!$identification) return response()->json(['error' => 'Identification not found']);

        return response()->json(['identification' => $identification], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Identification
    public function postIdentification(Request $request, $clientId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'uuid' => 'required',
                'expiry_date' => 'required',
                'type' => 'required'
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $client = Client::find($clientId);

        if (!$client) return  response()->json(['error', 'Client does not exist']);

        $identification = new Identification();

        $identification->uuid = $request->input('uuid');
        $identification->expiry_date = $request->input('expiry_date');
        $identification->type = $request->input('type');

        if (!$request->hasFile('file')) response()->json(['error', 'Identity attachment is required']);

        $path = $request->file('file')->store('file');
        $identification->attachment = env("APP_URL", "local") . ":8000/api/" . $path;


        // dd($client);
        $client->identifications()->save($identification);

        return  response()->json(['identifications' => $identification]);
    }

    // put Identification
    public function putIdentification(Request $request, $identificationId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'uuid' => 'required',
                'expiry_date' => 'required',
                'type' => 'required'
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $identification = Identification::find($identificationId);
        if (!$identification) return response()->json(['error' => 'Identification not found']);

        $identification->update([
            'uuid' => $request->uuid,
            'expiry_date' => $request->expiry_date,
            'type' => $request->type
        ]);

        return response()->json(['identification' => $identification], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Identification
    public function deleteIdentification($identificationId)
    {
        $identification = Identification::find($identificationId);
        if (!$identification) return response()->json(['error' => 'Identification not found']);

        $identification->delete();
        return response()->json(['message' => 'Identification deleted successfully']);
    }

    
}
