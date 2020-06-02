<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function  getReports($type)
    {
        $reports = Report::all();

        if ($type != 'all') {
            $reports =  $reports->map(function ($report) {
                return $report;
            })->reject(function ($report) use ($type) {
                return $report->reportable_type != 'App\Client';
            })->values();
        }
        return response()->json(
            ['reports' => $reports],
            200,
            [],
            JSON_NUMERIC_CHECK
        );
    }

    public function groupReportsPage()
    {
        $reports = Report::all();


        $filtered_collection = $reports->filter(function ($item) {
            if ($item->reportable_type == 'App\Group') return $item;
        });

        // dd($filtered_collection);
        return view('pages.reports.group-reports', ['reports' => $filtered_collection]);
    }

    public function savingReportsPage()
    {
        $reports = Report::all();

        $filtered_collection = $reports->filter(function ($item) {
            if ($item->reportable_type == 'App\Saving') return $item;
        });

        // dd($filtered_collection);
        return view('pages.reports.saving-reports', ['reports' => $filtered_collection]);
    }

    public function loanReportsPage()
    {
        $reports = Report::all();

        $filtered_collection = $reports->filter(function ($item) {
            if ($item->reportable_type == 'App\Loan') return $item;
        });

        // dd($filtered_collection);
        return view('pages.reports.loan-reports', ['reports' => $filtered_collection]);
    }

    public function organisationReportsPage()
    {
        $reports = Report::all();

        $filtered_collection = $reports->filter(function ($item) {
            if ($item->reportable_type == 'App\Company')

                return $item;
        });
        //dd($filtered_collection);
        return view('pages.reports.organisation-reports', ['reports' => $filtered_collection]);
    }

    public function financialReportsPage()
    {
        $reports = Report::all();

        $filtered_collection = $reports->filter(function ($item) {
            if ($item->reportable_type == 'App\Finance') return $item;
        });

        // dd($filtered_collection);
        return view('pages.reports.financial-reports', ['reports' => $filtered_collection]);
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
