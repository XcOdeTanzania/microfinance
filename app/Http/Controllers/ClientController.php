<?php

namespace App\Http\Controllers;

use App\Clients;
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

          return view('pages.client.pendingApproval');
}
        /**
        * Display closed.
        *
        * @return closedPage view in client
        */
       public function closedPage()
        {
           return view('pages.client.closed');
}
        /**
        * Display rejected.
        *
        * @return rejectedPage view in client
        */
        public function rejectedPage()
        {
           return view('pages.client.rejected');
}
        /**
        * Display transfer.
        *
        * @return transferPage view in client
        */
        public function transferPage()
        {
           return view('pages.client.transfer'); 
}
       /**
        * Display registerClient.
        *
        * @return transferPage view in client
        */
        public function registerClientPage()
        {
           return view('pages.client.register'); 
}

// Logical Functions

 

}