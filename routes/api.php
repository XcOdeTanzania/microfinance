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
Route::get('client/list',['uses'=>'ClientController@getClientsList'])->name('client.list');

// Loan api
Route::get('loan/list', ['uses' => 'LoanController@getAllLoans'])->name('loan.list');
Route::get('groups', ['uses' => 'GroupController@groups']);

// tasks
Route::get('tasks', ['uses' => 'TaskController@allTasks'])->name('tasks');

// users
Route::get('users', ['uses' => 'UserController@allUsers'])->name('users');

