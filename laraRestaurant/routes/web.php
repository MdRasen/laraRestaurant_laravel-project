<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\serviceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Public Routes
Route::get('/', [publicController::class, 'index'])->name('index');

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Admin Control
    Route::controller(adminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    // About Control
    Route::controller(aboutController::class)->group(function () {
        Route::get('/view-about', 'viewAbout')->name('admin.view-about');
        Route::get('/edit-about', 'editAbout')->name('admin.edit-about');
        Route::post('/edit-about', 'editAboutSubmit')->name('admin.edit-about');
    });

    // Service Control
    Route::controller(serviceController::class)->group(function () {
        Route::get('/add-service', 'addService')->name('admin.add-service');
        Route::post('/add-service', 'addServiceSubmit')->name('admin.add-service');
        Route::get('/view-service', 'viewService')->name('admin.view-service');
        Route::get('/edit-service/{service_id}', 'editService')->name('admin.edit-service');
        Route::post('/edit-service/{service_id}', 'editServiceSubmit')->name('admin.edit-service');
        Route::post('/delete-service', 'deleteService')->name('admin.delete-service');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
