<?php

namespace App\Http\Controllers;

use App\Client;
use App\Clients;
use App\District;
use App\Region;
use Illuminate\Http\Request;

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


        $names = array();
        foreach ($clients as $client){
            $client->profile = $client->user->profile;
            array_push($names,$client->id.' '.$client->user->profile->first_name.' '.$client->user->profile->middle_name.' '.$client->user->profile->last_name);
        }

        return response()->json([
            'clients' => $clients,'name'=>$names
        ], 200, [], JSON_NUMERIC_CHECK);
    }

// Logical Functions


}