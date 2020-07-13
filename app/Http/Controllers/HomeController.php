<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homePage()
    {
        return view('home');
    }

    public function registerClient()
    {
        return view('pages.client.register');
    }

    public function test()
    {
        if ($request->input('phoneNumber') == '+255714085613') {
            //$response = 'END Hello Henry;'. $request->input('networkCode');
            if (!$customer['gender']) {
                // Check if gender menu has just started !
                if ($request->input('text') == '') {
                    $response = 'CON Habari! , Tafadhali tuambie jinsia yako \n';
                    $response = '1: Mwanaume /n';
                    $response = '2: Mwanamke /n';

                }

                if ($request->input('text') == '1') {
                    $customer['gender'] = 'Mwanaume';
                    $response = 'END Asante taarifa zako zimehifadhiwa, jinsia yako ni mwanamume';

                }
                if ($request->input('text') == '2') {
                    $customer['gender'] = 'Mwanamke';
                    $response = 'END Asante taarifa zako zimehifadhiwa, jinsia yako ni mwanamke';
                }

                //   if($request->input('text') != '' || $request->input('text') != '1' || $request->input('text') != '2'  )
                //   $response = 'END Samahani, chaguo lako sio sahini';

            }

            if ($response == '') $response = 'END Samahani kunakitu hakikwenda sawa';

            header('Content-type: text/plain');
            echo $response;
            return;
        }
    }

}
