npm<?php

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
Route::get('groups/{status}', ['uses' => 'GroupController@groups']);

// tasks
Route::get('tasks', ['uses' => 'TaskController@allTasks'])->name('tasks');

// users
Route::get('users', ['uses' => 'UserController@allUsers'])->name('users');


// Users api
Route::get('user/list', ['uses' => 'UserController@usersList'])->name('user.list');

// Roles API
Route::get('role/list', ['uses' => 'RoleController@allRoles'])->name('role.list');

Route::get('routes', function (){
    $routes = collect(\Route::getRoutes())->map(function ($route) { return $route; });
    return response()->json(['routes'=>$routes]);
});