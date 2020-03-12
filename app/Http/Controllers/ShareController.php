<?php

namespace App\Http\Controllers;

use App\Share;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    /**
     * Displays shares.
     *
     * @return \Illuminate\Http\Response
     */
    public function sharesPage()
    {
        return  view('pages.shares.active');
    }


    /**
     * Displays pending shares.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendingSharesPage()
    {
        return view('pages.shares.pending');
    }


    /**
     * Displays waiting shares.
     *
     * @return \Illuminate\Http\Response
     */
    public function waitingSharesPage()
    {
        return view('pages.shares.waiting');
    }

     /**
     * Displays rejected shares.
     *
     * @return \Illuminate\Http\Response
     */
    public function rejectedSharesPage()
    {
        return view('pages.shares.rejected');
    }



     /**
     * Displays closed shares.
     *
     * @return \Illuminate\Http\Response
     */
    public function closedSharesPage()
    {
        return view('pages.shares.closed');
    }
}
