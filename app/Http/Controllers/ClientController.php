<?php

namespace App\Http\Controllers;

use App\Client;
use App\Clients;
use App\District;
use App\Events\ClientCreatedEvent;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    // Views Functions

    /**
     * Display pendingApproval.
     *
     * @return pendingApprovalPage view in client
     */
    public function pendingApprovalPage()
    {
        $clients = Client::all();
        return view('pages.client.pendingApproval', ['clients' => $clients]);
    }

    /**
     * Display closed.
     *
     * @return closedPage view in client
     */
    public function closedPage()
    {
        $clients = Client::class;
        return view('pages.client.closed', ['clients' => $clients]);
    }

    /**
     * Display rejected.
     *
     * @return rejectedPage view in client
     */
    public function rejectedPage()
    {
        $clients = Client::class;
        return view('pages.client.rejected', ['clients' => $clients]);
    }

    /**
     * Display transfer.
     *
     * @return transferPage view in client
     */
    public function transferPage()
    {
        $clients = Client::class;
        return view('pages.client.transfer', ['clients' => $clients]);
    }

    /**
     * Display registerClient.
     *
     * @return transferPage view in client
     */
    public function registerClientPage()
    {
        $regions = Region::all();
        $districts = District::all();
        return view('pages.client.register', ['regions' => $regions, 'districts' => $districts]);
    }

    public function getClientsList()
    {
        $clients = Client::all();
        foreach ($clients as $client) {
            $client->profile = $client->user->profile;
        }
        return response()->json([
            'clients' => $clients
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    // Logical Functions



    public function postClient(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name' => 'required',
                'client_email' => 'required | unique:users,email| email',
                'last_name' => 'required',
                'registration_date' => 'required',
                'terms_and_condition' => 'required',

            ]
        );

        if ($validator->fails())
            return redirect('/client/register')->with('error', $validator->errors());


        $client = new Client();

        $client->registration_date =  $request->registration_date;
        $client->terms_and_conditions  = true; // $request->terms_and_condition;
        $client->branch_id = 1;
        $client->name = $request->first_name;
        $client->email = $request->client_email;
        $client->password = Hash::make($request->last_name);

        $client->save();

        event(new ClientCreatedEvent($request, $client));

        return redirect(route('client.pending.approval'))->with('Client registered successfuly');
    }
}
