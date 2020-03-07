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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Group for the Routes that are to be protected by auth middleware
Route::group([
    'name' => 'auth.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    // Place your routes here

    //Client Routes
    Route::get('/client/register',function (){
        return view('pages.client.register');
    })->name('client.register');

    Route::get('/client/pendingApproval',function (){
        return view('pages.client.pendingApproval');
    })->name('client.pendingApproval');

    Route::get('/client/closed',function (){
        return view('pages.client.closed');
    })->name('client.closed');

    Route::get('/client/rejected',function (){
        return view('pages.client.rejected');
    })->name('client.rejected');

    // Loan Routes
    Route::get('/loan/create',function (){
        return view('pages.loan.create');
    })->name('loan.create');

});


Route::get('/client/register',function (){
    return view('pages.client.register');
})->name('client.register')->middleware('auth');

// Acoounting Roots
Route::get('/accounting/chartsOfAccounts',function (){
    return view('pages.accounting.chartsOfAccounts');
});

Route::get('/accounting/journals',function (){
    return view('pages.accounting.journals');
});

Route::get('/accounting/reconciliation',function (){
    return view('pages.accounting.reconciliation');
});

Route::get('/accounting/closeperiod',function (){
    return view('pages.accounting.closeperiod');
});

Route::get('/accounting/export',function (){
    return view('pages.accounting.export');
});

Route::get('/accounting/periodicaccrual',function (){
    return view('pages.accounting.periodicaccrual');
});
//  Accounting Roots  end


// SHARES ROUTES
Route::get('/shares/active', function() {
    return view('pages.shares.active');
});
Route::get('/shares/pending', function(){
    return view('pages.shares.pending');
});
Route::get('/shares/waiting', function() {
    return view('pages.shares.waiting');
});

Route::get('/shares/rejected', function(){
    return view('pages.shares.rejected');
});
Route::get('/shares/closed', function(){
    return view('pages.shares.closed');
});


// Users Route
Route::get('/user/users',function(){
    return view('pages.user.users');
});

Route::get('/user/roles',function(){
    return view('pages.user.roles');
});

Route::get('/user/permissions',function(){
    return view('pages.user.permissions');
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
        return view('pages.reports.financial-reports');
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
