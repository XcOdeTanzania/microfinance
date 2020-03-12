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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/lock', function () {
    return view('pages/lock');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Group for the Routes that are to be protected by auth middleware
Route::group([
    'name' => 'Client',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    // Place your routes here

    //Client Routes
    Route::get('/client/register', function () {
        return view('pages.client.register');
    })->name('client.register');

    Route::get('/client/pendingApproval', function () {
        return view('pages.client.pendingApproval');
    })->name('client.pendingApproval');

    Route::get('/client/closed', function () {
        return view('pages.client.closed');
    })->name('client.closed');

    Route::get('/client/rejected', function () {
        return view('pages.client.rejected');
    })->name('client.rejected');

    Route::get('client/transfer', function () {
        return view('pages.client.transfer');
    })->name('client.transfer');

});


// Task Routes
Route::group([
    'name' => 'Tasks.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    Route::get('/task/pendingApproval', function () {
        return view('pages.task.pendingApproval');
    });

    Route::get('/task/myActions', function () {
        return view('pages.task.myActions');
    });

});


// Accounting Routs

Route::group([
    'name' => 'Accounts.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {
    Route::get('/accounting/chartsOfAccounts', function () {
        return view('pages.accounting.chartsOfAccounts');
    });

    Route::get('/accounting/journals', function () {
        return view('pages.accounting.journals');
    });

    Route::get('/accounting/reconciliation', function () {
        return view('pages.accounting.reconciliation');
    });

    Route::get('/accounting/closeperiod', function () {
        return view('pages.accounting.closeperiod');
    });

    Route::get('/accounting/export', function () {
        return view('pages.accounting.export');
    });

    Route::get('/accounting/periodicaccrual', function () {
        return view('pages.accounting.periodicaccrual');
    });

    Route::get('/accounting/journaltemplate', function () {
        return view('pages.accounting.journaltemplate');
    });

    Route::get('/accounting/journals', function () {
        return view('pages.accounting.journals');
    });
});

//  Accounting Roots  end


// SHARES ROUTES
Route::group([
    'name' => 'Shares.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

// shares active route
    Route::get('/shares/active', function () {
        return view('pages.shares.active');
    });
// share pending route
    Route::get('/shares/pending', function () {
        return view('pages.shares.pending');
    });
// share waiting route
    Route::get('/shares/waiting', function () {
        return view('pages.shares.waiting');
    });
// shares rejected route
    Route::get('/shares/rejected', function () {
        return view('pages.shares.rejected');
    });
// shares closed route
    Route::get('/shares/closed', function () {
        return view('pages.shares.closed');
    });
});
//END SHARES ROUTE
// ==============================


// Users Route
Route::group([
    'name' => 'User.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    Route::get('/user/users', function () {
        return view('pages.user.users');
    });

    Route::get('/user/roles', function () {
        return view('pages.user.roles');
    });

    Route::get('/user/permissions', function () {
        return view('pages.user.permissions');
    });

// User details
    Route::get('/user/details', function () {
        return view('pages.user.details');
    });

//User role
    Route::get('/user/role', function () {
        return view('pages.user.role');
    });

});

// Report menu routes start

Route::group([
    'name' => 'Reports',
    'prefix' => 'reports',
    'middleware' => 'auth'
], function () {
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


// start Loan routes

Route::group([
    'name' => 'Loan',
    'prefix' => 'loan',
    'middleware' => 'auth'
], function () {

    //create loans route
    Route::get('create', function () {
        return view('pages.loan.create');
    });

    // view all loans
    Route::get('loans', function () {
        return view('pages.loan.view');
    });

    // view loan detail routes
    Route::get('details', function () {
        return view('pages.loan.details');
    });

    // pending approval load route
    Route::get('pending-approval', function () {
        return view('pages.loan.pending-approval');
    });

    // pending second approval loan route
    Route::get('pendingSecondApproval', function() {
        return view('pages.loan.pendingSecondApproval');
    });

    // pending load details route
    Route::get('loan/{id}', function ($id) {
        return view('pages.loan.pending', ['id' => $id]);
    })->name('loan.pending');
    Route::get('calculator', function () {



    Route::get('calculator', function() {
        return view('pages.loan.calculator');
    });
});


//setting routes start
Route::group([
    'name' => 'Setting',
    'prefix' => '',
    'middleware' => 'auth'
], function () {


    Route::get('/setting/blacklist', function () {
        return view('pages.setting.blacklist');
    });

    Route::get('/setting/productgroup', function () {
        return view('pages.setting.productgroup');
    });

    Route::get('/setting/financialactivity', function () {
        return view('pages.setting.financialactivity');
    });

    Route::get('/setting/currencies', function () {
        return view('pages.setting.currencies');
    });

});
// setting routes ends

// Groups routes starts


Route::group([
    'name' => 'Groups.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    Route::get('/groups/groups', function () {
        return view('pages.groups.groups');
    });

    Route::get('/groups/centers', function () {
        return view('pages.groups.centers');
    });

    Route::get('/groups/transfer', function () {
        return view('pages.groups.transfer');
    });

});


//Groups routes Ends
