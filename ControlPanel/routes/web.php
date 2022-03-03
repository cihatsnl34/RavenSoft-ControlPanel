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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function ()
{
Route::namespace('Auth')->middleware('guest:admin')->group(function()
{
        //LOGİN route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
});
Route::middleware('admin')->group(function () {
    Route::get('dashboard','HomeController@index')->name('dashboard');

    //Packets
    Route::get('packets',[\App\Http\Controllers\Admin\PacketsController::class, 'index'])->name('admin_packets'); 
    Route::post('packets/add',[\App\Http\Controllers\Admin\PacketsController::class, 'store'])->name('admin_packets_add');
        Route::get('packets/add', function () {
            return view('admin.packets.packets_add');
        });
    Route::get('packets/edit/{id}',[\App\Http\Controllers\Admin\PacketsController::class, 'edit'])->name('admin_packets_edit');
    Route::post('packets/update/{id}',[\App\Http\Controllers\Admin\PacketsController::class, 'update'])->name('admin_packets_update');
    Route::get('packets/delete/{id}',[\App\Http\Controllers\Admin\PacketsController::class, 'destroy'])->name('admin_packets_delete');


});
Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');



});

#Buyer
Route::namespace('Buyer')->prefix('buyer')->name('buyer.')->group(function (){
    Route::namespace('Auth')->middleware('guest:buyer')->group(function()
    {
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('buyerlogin');
    });
    Route::middleware('buyer')->group(function () {

    Route::get('dashboard','HomeController@index')->name('dashboard');
    Route::get('packetsBuy/{id}',[\App\Http\Controllers\Buyer\HomeController::class, 'store'])->name('buyer_package_buy');
    });

    Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});

#Register
Route::post('register',[\App\Http\Controllers\BuyerRegisterController::class, 'store'])->name('buyer_register');
        Route::get('register', function () {
            return view('register');
        });