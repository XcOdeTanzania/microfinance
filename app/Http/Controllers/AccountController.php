<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display accounting charts.
     *
     * @return \Illuminate\Http\Response
     */
    public function chartOfAccountsPage()
    {
        return view('pages.accounting.chartsOfAccounts');
    }

    /**
     * Display journals.
     *
     * @return \Illuminate\Http\Response
     */
    public function journalsPage()
    {
        return view('pages.accounting.journals');
    }


    /**
     * Display account reconciliation.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountReconciliationPage()
    {
        return view('pages.accounting.reconciliation');
    }

    /**
     * Display account closed period.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountClosePeriodPage()
    {
        return view('pages.accounting.closeperiod');
    }


    /**
     * Display account export.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountExportPage()
    {
        return view('pages.accounting.export');
    }

     /**
     * Display account periodic accrual.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountPeriodicAccrualPage()
    {
        return view('pages.accounting.periodicaccrual');
    }

     /**
     * Display account journal template.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountJournalTemplatePage()
    {
        return view('pages.accounting.journaltemplate');
    }

}
