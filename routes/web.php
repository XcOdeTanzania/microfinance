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
