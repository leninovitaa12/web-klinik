<?php

use App\Http\Controllers\admin\BillingController as AdminBillingController;
use App\Http\Controllers\admin\PresensiController as AdminPresensiController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\DataClientController as AdminDataClientController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;

use App\Http\Controllers\BillingController;

use App\Http\Controllers\DataClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\DataClientController as ControllersDataClientController;
use App\Http\Controllers\LoginController;
use App\Models\presensi;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('landing');
});

Route::group(['prefix' => 'account'],function(){

    //Guest Middleware
    Route::group(['middleware' => 'guest'],function() {
        Route::get('login',[LoginController::class, 'index'])->name('account.login');
        Route::get('register',[LoginController::class, 'register'])->name('account.register');
        Route::post('process-register',[LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate',[LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    //Authenticated Middleware
    Route::group(['middleware' => 'auth'],function() {
        Route::get('logout',[LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard',[DashboardController::class, 'index'])->name('account.dashboard');
        Route::get('appointment',[DashboardController::class, 'appointment'])->name('account.appointment');
        Route::get('formappointment',[DashboardController::class, 'formappointment'])->name('account.formappointment');

    });
});

    // ADMIN
Route::group(['prefix' => 'admin'],function(){

    //Guest Middleware untuk Admin
    Route::group(['middleware' => 'admin.guest'],function() {
        Route::get('login',[AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate',[AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });

    //Authenticated Middleware Admin
    Route::group(['middleware' => 'admin.auth'],function() {
        Route::get('dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout',[AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('data_client', [AdminDataClientController::class, 'index'])->name('admin.client');
        Route::get('form_client', [AdminDataClientController::class, 'create'])->name('admin.create');
        Route::post('data_client', [AdminDataClientController::class, 'store'])->name('admin.store');
        Route::delete('hapus_client/{id}', [AdminDataClientController::class, 'destroy'])->name('admin.destroy');

        // Route for Billing
        Route::get('billings', [AdminBillingController::class, 'index'])->name('admin.billings');
        Route::get('billings/edit/{id}', [AdminBillingController::class, 'edit'])->name('admin.billings.edit');

        Route::get('presensi', [AdminPresensiController::class, 'index'])->name('admin.presensi');
        
    });


});

// Route::prefix('admin') -> middleware('admin.auth') -> name('admin') -> namespace('App\Http\Controllers\admin') -> group(

//     function() {
//         Route::get('data_client', [DataClientController::class, 'index'])->name('admin.client');

//     });

// Route::group(['prefix' => 'admin', 'middleware' => 'admin.auth'], function() {
//     //Auth Billing Admin
//     Route::get('billing', function () {
//         return view('admin.billing');
//     })->name('admin.billing');

//     //Auth PRESENSI dashboard Admin
//     Route::get('presensi', function () {
//         return view('admin.presensi');
//     })->name('admin.presensi');

//     //Auth Data Client Pada Page Admin
//     //  Route::get('data_client', function () {
//     //      return view('admin.client');
//     // })->name('admin.client');

//     // Route::get('data_client/create', function () {
//     //     return view('admin.create_data_client');
//     // })->name('DataClient.create');

//     // Route::get('data_client', [DataClientController::class, 'index'])->name('admin.client');

//     //Route::resource('data_client', DataClientController::class);

//     Route::get('admin-form', [AdminFormController::class, 'index'])->name('admin.form');

//     //Auth Edit Profil Pada Page Admin
//     Route::get('edit-profil', function () {
//         return view('profil.edit_profil');
//     })->name('profil.edit');

//     // without authentication
//  //Route::resource('admin_klien', KlienController::class);
//  //Route::resource('admin_form', AdminFormController::class);
//  Route::resource('admin_dashboard', AdminDashboardController::class);
// //  Route::get('admin_klien/create', [KlienController::class, 'create'])->name('admin_klien.create');
// //  Route::post('admin_klien/store', [KlienController::class, 'store'])->name('admin_klien.store');
// //  Route::get('admin_klien/index', [KlienController::class, 'index'])->name('admin_klien.index');
// });
