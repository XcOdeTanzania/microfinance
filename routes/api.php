<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Loan api
Route::get('loan/list', ['uses' => 'LoanController@getAllLoans']);
Route::get('groups/{status}', ['uses' => 'GroupController@groups']);

// tasks
Route::get('tasks', ['uses' => 'TaskController@allTasks']);
Route::get('task/{taskId}', ['uses' => 'TaskController@getTask']);
Route::put('task/{taskId}', ['uses' => 'TaskController@putTask']);
Route::delete('task/{taskId}', ['uses' => 'TaskController@deleteTask']);


// users
Route::get('users', ['uses' => 'UserController@allUsers']);


//loans
Route::post('loan', ['uses' => 'LoanController@postLoan']);
Route::put('loan/terms/{loadId}', ['uses' => 'LoanController@updateLoanTerms']);
Route::put('loan/settings/{loadId}', ['uses' => 'LoanController@updateLoanSettings']);


//Clients
Route::post('client', ['uses' => 'ClientController@postClient']);
Route::get('clients/{status}', ['uses' => 'ClientController@getClients']);
Route::get('client/{clientId}', ['uses' => 'ClientController@getClient']);
Route::put('client/{clientId}', ['uses' => 'ClientController@putClient']);
Route::delete('client/{clientId}', ['uses' => 'ClientController@deleteClient']);
Route::get('file/{name}', ['uses' => 'ClientController@downloadFile']);
Route::post('client/loan/{clientId}', ['uses' => 'ClientController@createClientLoan']);


//Identification
Route::get('identifications', ['uses' => 'IdentificationController@getIdentifications']);
Route::post('identification/{clientId}', ['uses' => 'IdentificationController@postIdentification']);
Route::get('identification/{identificationId}', ['uses' => 'IdentificationController@getIdentification']);
Route::put('identification/{identificationId}', ['uses' => 'IdentificationController@putIdentification']);
Route::delete('identification/{identificationId}', ['uses' => 'IdentificationController@deleteIdentification']);


//kins
Route::get('kins', ['uses' => 'KinController@getKins']);
Route::post('kin/{clientId}', ['uses' => 'KinController@postKin']);
Route::get('kin/{kinId}', ['uses' => 'KinController@getKin']);
Route::put('kin/{kinId}', ['uses' => 'KinController@putKin']);
Route::delete('kin/{kinId}', ['uses' => 'KinController@deleteKin']);

//businesses
Route::get('businesses', ['uses' => 'BusinessController@getBusinesses']);
Route::post('business/{clientId}', ['uses' => 'BusinessController@postBusiness']);
Route::get('business/{businessId}', ['uses' => 'BusinessController@getBusiness']);
Route::put('business/{businessId}', ['uses' => 'BusinessController@putBusiness']);
Route::delete('business/{businessId}', ['uses' => 'BusinessController@deleteBusiness']);
Route::post('business/loan/{businessId}', ['uses' => 'BusinessController@createBusinessLoan']);



//groups
Route::get('groups', ['uses' => 'GroupController@getGroups']);
Route::post('group/{branchId}', ['uses' => 'GroupController@postGroup']);
Route::get('group/{groupId}', ['uses' => 'GroupController@getGroup']);
Route::put('group/{groupId}', ['uses' => 'GroupController@putGroup']);
Route::delete('group/{groupId}', ['uses' => 'GroupController@deleteGroup']);
Route::post('group/loan/{groupId}', ['uses' => 'GroupController@createGroupLoan']);

//branches
Route::get('branches', ['uses' => 'BranchController@getBranches']);
Route::post('branch/{companyId}', ['uses' => 'BranchController@postBranch']);
Route::get('branch/{branchId}', ['uses' => 'BranchController@getBranch']);
Route::put('branch/{branchId}', ['uses' => 'BranchController@putBranch']);
Route::delete('branch/{branchId}', ['uses' => 'BranchController@deleteBranch']);

//loan Types

Route::get('loanTypes', ['uses' => 'LoanTypeController@getLoanTypes']);
Route::post('loanType', ['uses' => 'LoanTypeController@postLoanType']);
Route::get('loanType/{loanTypeId}', ['uses' => 'LoanTypeController@getLoanType']);
Route::put('loanType/{loanTypeId}', ['uses' => 'LoanTypeController@putLoanType']);
Route::delete('loanType/{loanTypeId}', ['uses' => 'LoanTypeController@deleteLoanType']);


//reports
Route::get('reports/{type}', ['uses' => 'ReportController@getReports']);
