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
