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

Route::group(['middleware' =>['auth']],function () {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});
Route::group(['middleware' =>['auth', 'role:partner']],function () {
    Route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});
//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function (){
        //Login Route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminLogin');
    });
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
require __DIR__.'/auth.php';
