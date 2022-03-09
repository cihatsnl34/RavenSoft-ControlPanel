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


//Welcome
Route::post('/',[\App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/', function () {
    return view('welcome');
});

Route::post('company_select',[\App\Http\Controllers\WelcomeController::class, 'store'])->name('company_select_add');
Route::get('company_select',[\App\Http\Controllers\WelcomeController::class, 'create'])->name('company_select');


 

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

    #Company Appeal
    Route::get('company',[\App\Http\Controllers\Admin\AppealController::class, 'index'])->name('admin_company_show'); 
    Route::get('company/approve/{id}',[\App\Http\Controllers\Admin\AppealController::class, 'approve'])->name('admin_company_approve');
    Route::get('company/delete/{id}',[\App\Http\Controllers\Admin\AppealController::class, 'destroy'])->name('admin_company_delete');
    Route::get('currentCompany',[\App\Http\Controllers\Admin\AppealController::class, 'currentCompany'])->name('admin_currentCompany_show');
    Route::get('currentCompany/delete/{id}',[\App\Http\Controllers\Admin\AppealController::class, 'deleteCompany'])->name('admin_currentCompany_delete');
    #Partner Appeal
    Route::get('partner',[\App\Http\Controllers\Admin\PartnerAppealController::class, 'index'])->name('admin_partner_show'); 
    Route::get('partner/approve/{id}',[\App\Http\Controllers\Admin\PartnerAppealController::class, 'approve'])->name('admin_partner_approve');
    Route::get('partner/delete/{id}',[\App\Http\Controllers\Admin\PartnerAppealController::class, 'destroy'])->name('admin_partner_delete');
    Route::get('currentPartner',[\App\Http\Controllers\Admin\PartnerAppealController::class, 'currentPartner'])->name('admin_currentPartner_show'); 
    Route::get('currentPartner/delete/{id}',[\App\Http\Controllers\Admin\PartnerAppealController::class, 'deletePartner'])->name('admin_currentPartner_delete');
    #Alone Partner Appeal
    Route::get('Alonepartner',[\App\Http\Controllers\Admin\AlonePartnerController::class, 'index'])->name('admin_Apartner_show'); 
    Route::get('Alonepartner/approve/{id}',[\App\Http\Controllers\Admin\AlonePartnerController::class, 'approve'])->name('admin_Apartner_approve');
    Route::get('Alonepartner/delete/{id}',[\App\Http\Controllers\Admin\AlonePartnerController::class, 'destroy'])->name('admin_Apartner_delete');
    Route::get('currentalonepartner',[\App\Http\Controllers\Admin\AlonePartnerController::class, 'currentalonepartner'])->name('admin_currentaloneApartner_show');   
    Route::get('currentalonepartner/delete/{id}',[\App\Http\Controllers\Admin\AlonePartnerController::class, 'deleteAlone'])->name('admin_currentaloneApartner_delete'); 

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
        
#Company
Route::namespace('Company')->prefix('company')->name('company.')->group(function (){
    Route::namespace('Auth')->middleware('guest:company')->group(function(){
        //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('companylogin');
    });
    Route::middleware('company')->group(function () {

    Route::get('dashboard','AppialController@index')->name('dashboard');
    //Packets
    Route::get('packets',[\App\Http\Controllers\Company\PackageController::class, 'index'])->name('company_packets'); 
    Route::post('packets/add',[\App\Http\Controllers\Company\PackageController::class, 'store'])->name('company_packets_add');
        Route::get('packets/add', function () {
            return view('company.packets.packets_add');
        });
    Route::get('packets/edit/{id}',[\App\Http\Controllers\Company\PackageController::class, 'edit'])->name('company_packets_edit');
    Route::post('packets/update/{id}',[\App\Http\Controllers\Company\PackageController::class, 'update'])->name('company_packets_update');
    Route::get('packets/delete/{id}',[\App\Http\Controllers\Company\PackageController::class, 'destroy'])->name('company_packets_delete');

    #partner
    Route::get('partner',[\App\Http\Controllers\Company\AppialController::class, 'index'])->name('company_partner_show');
    Route::get('currentPartner',[\App\Http\Controllers\Company\AppialController::class, 'currentPartner'])->name('company_currentPartner_show'); 
    Route::get('currentPartner/delete/{id}',[\App\Http\Controllers\Company\AppialController::class, 'delete'])->name('company_currentPartner_delete'); 
    Route::get('partner/approve/{id}',[\App\Http\Controllers\Company\AppialController::class, 'approve'])->name('company_partner_approve');
    Route::get('partner/delete/{id}',[\App\Http\Controllers\Company\AppialController::class, 'destroy'])->name('company_partner_delete');
    #Active Service
    Route::get('activeService',[\App\Http\Controllers\Company\ActiveServiceController::class, 'index'])->name('activeService_show'); 
    Route::get('activeService/edit/{id}',[\App\Http\Controllers\Company\ActiveServiceController::class, 'edit'])->name('activeService_edit');
    Route::post('activeService/update/{id}',[\App\Http\Controllers\Company\ActiveServiceController::class, 'update'])->name('activeService_update');
    //Route::get('activeService/approve/{id}',[\App\Http\Controllers\Company\ActiveServiceController::class, 'approve'])->name('company_partner_approve');
    Route::get('activeService/delete/{id}',[\App\Http\Controllers\Company\ActiveServiceController::class, 'destroy'])->name('activeService_delete');
    });
    Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');


    });
    #Company Register
    Route::post('companyRegister',[\App\Http\Controllers\CompanyRegisterController::class, 'store'])->name('company_register');
    Route::get('companyRegister', function () {
        return view('companyRegister');
    });
#Partner
Route::namespace('Partner')->prefix('partner')->name('partner.')->group(function (){
    Route::namespace('Auth')->middleware('guest:partner')->group(function(){
        //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('partnerlogin');
    });
    Route::middleware('partner')->group(function () {
        Route::get('dashboard','HomeController@index')->name('dashboard');
        Route::post('packetsBuy/{id}',[\App\Http\Controllers\Partner\HomeController::class, 'store'])->name('partner_package_buy');
        Route::get('Card',[\App\Http\Controllers\Partner\HomeController::class, 'card'])->name('partner_card');
        Route::get('myPackages',[\App\Http\Controllers\Partner\HomeController::class, 'myPackages'])->name('myPackages');
        });  
          Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');

    });
#Partner Register
Route::post('partnerRegister',[\App\Http\Controllers\PartnerRegisterController::class, 'store'])->name('partner_register');

Route::get('partnerRegisterList',[\App\Http\Controllers\PartnerRegisterController::class, 'companyList'])->name('partner_registerList');