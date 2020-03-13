<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/lock', function () {
    return view('pages/lock');
});

Auth::routes();

Route::get('/home', ['uses' => 'HomeController@homePage'])->name('home');


// Group for the Routes that are to be protected by auth middleware
Route::group([
    'name' => 'Client',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    // Place your routes here

    //Client Routes
    Route::get('/client/register', ['uses' => 'ClientController@registerClientPage'])->name('client.register');
    Route::get('/client/pendingApproval', ['uses' => 'ClientController@pendingApprovalPage'])->name('client.pendingApproval');
    Route::get('/client/closed', ['uses' => 'ClientController@closedPage'])->name('client.closed');
    Route::get('/client/rejected', ['uses' => 'ClientController@rejectedPage'])->name('client.rejected');
    Route::get('/client/closed', ['uses' => 'ClientController@transferPage'])->name('client.transfer');
    
});


// Task Routes
Route::group([
    'name' => 'Tasks.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    Route::get('/task/pendingApproval', ['uses' =>'TaskController@pendingApprovalPage'])->name('task.pending.approval');

    Route::get('/task/myActions', ['uses' =>'TaskController@myActionsPage']) ->name('task.my.actions');
});


// Accounting Routs

Route::group([
    'name' => 'Accounts.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {
    Route::get('/accounting/chartsOfAccounts',['uses'=>'AccountController@chartOfAccountsPage'])->name('account.charts');

    Route::get('/accounting/journals',['uses'=>'AccountController@journalsPage'])->name('account.journals');

    Route::get('/accounting/reconciliation', ['uses' => 'AccountController@accountReconciliationPage'])->name('account.reconciliation');

    Route::get('/accounting/closeperiod', ['uses' => 'AccountController@accountClosePeriodPage'])->name('account.close.period');

    Route::get('/accounting/export', ['uses' => 'AccountController@accountExportPage'])->name('account.export');

    Route::get('/accounting/periodicaccrual', ['uses' => 'AccountController@accountPeriodicAccrualPage'])->name('account.periodic.accurual');

    Route::get('/accounting/journaltemplate', ['uses' => 'AccountController@accountJournalTemplatePage'])->name('account.journal.template');
});

//  Accounting Roots  end


// SHARES ROUTES
Route::group([
    'name' => 'Shares.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    // shares active route
    Route::get('/shares/active', ['uses' => 'ShareController@sharesPage'])->name('shares');
    // share pending route
    Route::get('/shares/pending', ['uses' => 'ShareController@pendingSharesPage'])->name('pending.shares');
    // share waiting route
    Route::get('/shares/waiting', ['uses' => 'ShareController@waitingSharesPage'])->name('waiting.shares');
    // shares rejected route
    Route::get('/shares/rejected', ['uses' => 'ShareController@rejectedSharesPage'])->name('rejected.shares');
    // shares closed route
    Route::get('/shares/closed', ['uses' => 'ShareController@closedSharesPage'])->name('share.close');
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
    Route::get('clientReports', ['uses' => 'ReportController@clientReportsPage']);

    // group reports route
    Route::get('groupReports', ['uses' => 'ReportController@groupReportsPage']);

    // savings Reports route
    Route::get('savingReports', ['uses' => 'ReportController@savingReportsPage']);

    // loan reports route
    Route::get('loanReports', ['uses' => 'ReportController@loanReportsPage']);

    // organisation reports route
    Route::get('organisationReports', ['uses' => 'ReportController@organisationReportsPage']);

    // financial reports route
    Route::get('financialReports', ['uses' => 'ReportController@financialReportsPage']);

    // Report schedular route
    Route::get('reportSchedular', ['uses' => 'ReportController@reportSchedularPage']);

    // Data export route
    Route::get('dataExport', ['uses' => 'ReportController@dataExportPage']);

    // report queue route
    Route::get('reportQueue', ['uses' => 'ReportController@reportQueuePage']);
});

// Report menu route end


// start Loan routes

Route::group([
    'name' => 'Loan',
    'prefix' => 'loan',
    'middleware' => 'auth'
], function () {

    //create loans route
    Route::get('create', ['uses' => 'LoanController@createLoanPage'])->name('create.loan');

    // view all loans
    Route::get('loans', ['uses' => 'LoanController@loansPage'])->name('loans');

    // view loan detail routes
    Route::get('details', ['uses' => 'LoanController@loanDetailsPage'])->name('loan.details');

    // pending approval load route
    Route::get('pending-approval', ['uses' => 'LoanController@loanPendingApprovalPage'])->name('loan.pending.approval');

    // pending second approval loan route
    Route::get('pendingSecondApproval', ['uses' => 'LoanController@loanPendingSecondApprovalPage'])->name('loan.pending.second.approval');

    // pending load details route
    Route::get('loan/{id}', ['uses' => 'LoanController@loanPendingDetailsPage'])->name('loan.pending');
    Route::get('calculator', ['uses' => 'LoanController@loanCalculatorPage'])->name('loan.calculator');
});

   


//setting routes start
Route::group([
    'name' => 'Setting',
    'prefix' => '',
    'middleware' => 'auth'
], function () {


    Route::get('/setting/blacklist', ['uses' => 'SettingController@blackListPage'])->name('setting.blacklist');

    Route::get('/setting/product/group', ['uses' => 'SettingController@productGroupPage'])->name('setting.product.group');

    Route::get('/setting/financial/activity', ['uses' => 'SettingController@financialActivityPage'])->name('setting.financial.activity');

    Route::get('/setting/currencies', ['uses' => 'SettingController@currenciesPage'])->name('setting.currencies');
});
// setting routes ends

// Groups routes starts


Route::group([
    'name' => 'Groups.',
    'prefix' => '',
    'middleware' => 'auth'
], function () {

    Route::get('/groups/groups',['uses'=>'GroupController@groupsPage'])->name('group.groups');

    Route::get('/groups/centers', ['uses'=>'GroupController@centersPage'])->name('group.centers');

    Route::get('/groups/transfer', ['uses'=>'GroupController@transferPage'])->name('group.transfer');
    
});


//Groups routes Ends
