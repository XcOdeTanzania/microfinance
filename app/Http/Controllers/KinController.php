<?php

namespace App\Http\Controllers;

use App\Client;
use App\Kin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KinController extends Controller
{
    //get Kin
    public function getKins()
    {
        $kins = Kin::all();

        return response()->json(['kins' => $kins], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Kin
    public function getKin($indentificationId)
    {

        $kin = Kin::find($indentificationId);
        if (!$kin) return response()->json(['error' => 'Kin not found']);

        return response()->json(['kin' => $kin], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Kin
    public function postKin(Request $request, $clientId)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'address' => 'required',
                'date_of_birth' => 'required',
                'region' => 'required',
                'phone_number' => 'required',
                'district' => 'required',
                'relationship' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error' => $validator->errors(),'message' => $validator->getMessageBag()->first(), 'status' => false ]);

        $client = Client::find($clientId);

        if (!$client) return  response()->json(['error' => $validator->errors(), 'status' => false ,'message' => 'Client does not exist']);

        $kin = new Kin();

        $kin->name = $request->name;
        $kin->address = $request->address;
        $kin->date_of_birth = $request->date_of_birth;
        $kin->region = $request->region;
        $kin->phone_number = $request->phone_number;
        $kin->district = $request->district;
        $kin->relationship = $request->relationship;


        if ($request->hasFile('file')){
            $path = $request->file('file')->store('file');
            $kin->image = $path . env("APP_URL", "local") . ":8000/api/" . $path;
        } 

        $client->kins()->save($kin);

        return  response()->json(['kin' => $kin, 'status' => true,'message'=>'Submitted successfully']);
    }

    // put Kin
    public function putKin(Request $request, $kinId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'address' => 'required',
                'date_of_birth' => 'required',
                'region' => 'required',
                'phone_number' => 'required',
                'district' => 'required',
                'relationship' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $kin = Kin::find($kinId);
        if (!$kin) return response()->json(['error' => 'Kin not found']);

        $kin->update([
            'name' => $request->name,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'region' => $request->region,
            'phone_number' => $request->phone_number,
            'district' => $request->district,
            'relationship' => $request->relationship,
        ]);

        return response()->json(['kin' => $kin], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Kin
    public function deleteKin($kinId)
    {
        $kin = Kin::find($kinId);
        if (!$kin) return response()->json(['error' => 'Kin not found']);

        $kin->delete();
        return response()->json(['message' => 'Kin deleted successfully']);
    }
}
