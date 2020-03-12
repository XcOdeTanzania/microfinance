<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    
    public function clientReportsPage()
    {
        return view('pages.reports.client-reports');
    }

    public function groupReportsPage()
    {
        return view('pages.reports.group-reports');
    }

    public function savingReportsPage()
    {
        return view('pages.reports.saving-reports');
    }

    public function loanReportsPage()
    {
        return view('pages.reports.loan-reports');
    }

    public function organisationReportsPage()
    {
        return view('pages.reports.organisation-reports');
    }

    public function financialReportsPage()
    {
        return view('pages.reports.financial-reports');
    }

    public function reportSchedularPage()
    {
        return view('pages.reports.report-schedular');
    }

    public function dataExportPage()
    {
        return view('pages.reports.data-export');
    }

    public function reportQueuePage()
    {
        return view('pages.reports.report-queue');
    }
}
