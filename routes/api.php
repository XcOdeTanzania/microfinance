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
Route::get('loan/list', ['uses' => 'LoanController@getAllLoans'])->name('loan.list');
Route::get('groups/{status}', ['uses' => 'GroupController@groups']);

// tasks
Route::get('tasks', ['uses' => 'TaskController@allTasks'])->name('tasks');

// users
Route::get('users', ['uses' => 'UserController@allUsers'])->name('users');



//loans
Route::post('loan', ['uses' => 'LoanController@postLoan'])->name('loan');
Route::put('loan/terms/{loadId}', ['uses' => 'LoanController@updateLoanTerms'])->name('loanterms');
Route::put('loan/settings/{loadId}', ['uses' => 'LoanController@updateLoanSettings'])->name('loansettings');


//loans

Route::post('client', ['uses' => 'ClientController@postClient']);
Route::get('clients/{status}', ['uses' => 'ClientController@getClients']);
Route::get('client/{clientId}', ['uses' => 'ClientController@getClient']);
Route::put('client/{clientId}', ['uses' => 'ClientController@putClient']);
Route::delete('client/{clientId}', ['uses' => 'ClientController@deleteClient']);
