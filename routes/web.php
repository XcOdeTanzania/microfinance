<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/demo', function () {
    return view('demo');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/client/register',function (){
    return view('pages.client.register');
})->name('client.register')->middleware('auth');

Route::get('/accounting/chartsOfAccounts',function (){
    return view('pages.accounting.chartsOfAccounts');
});

Route::get('/accounting/journals',function (){
    return view('pages.accounting.journals');
});


// Report menu routes start

Route::group(['prefix' => 'reports'], function() {
    // client reports route
    Route::get('clientReports', function () {
        return view('pages.reports.client-reports');
    });

    // group reports route
    Route::get('groupReports', function () {
        return view('pages.reports.group-reports');
    });

    // savings Reports route
    Route::get('savingReports', function () {
        return view('pages.reports.saving-reports');
    });

    // loan reports route
    Route::get('loanReports', function () {
        return view('pages.reports.loan-reports');
    });

    // organisation reports route
    Route::get('organisationReports', function () {
        return view('pages.reports.organisation-reports');
    });

    // financial reports route
    Route::get('financialReports', function () {
        return view('pages.reports.financial-report');
    });

    // Report schedular route
    Route::get('reportSchedular', function () {
        return view('pages.reports.report-schedular');
    });

    // Data export route
    Route::get('dataExport', function () {
        return view('pages.reports.data-export');
    });

    // report queue route
    Route::get('reportQueue', function () {
        return view('pages.reports.report-queue');
    });
});

// Report menu route end