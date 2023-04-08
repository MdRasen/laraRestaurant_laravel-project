<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\admin\menuController;
use App\Http\Controllers\admin\teamController;
use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\serviceController;
use App\Http\Controllers\admin\reservationController;

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

    // Menu Control
    Route::controller(menuController::class)->group(function () {
        Route::get('/add-menu', 'addMenu')->name('admin.add-menu');
        Route::post('/add-menu', 'addMenuSubmit')->name('admin.add-menu');
        Route::get('/view-menu', 'viewMenu')->name('admin.view-menu');
        Route::get('/edit-menu/{menu_id}', 'editMenu')->name('admin.edit-menu');
        Route::post('/edit-menu/{menu_id}', 'editMenuSubmit')->name('admin.edit-menu');
        Route::post('/delete-menu', 'deleteMenu')->name('admin.delete-menu');
    });

    // Reservation Control
    Route::controller(reservationController::class)->group(function () {
        Route::get('/add-reservation', 'addReservation')->name('admin.add-reservation');
        Route::post('/add-reservation', 'addReservationSubmit')->name('admin.add-reservation');
        Route::get('/view-reservation', 'viewReservation')->name('admin.view-reservation');
        Route::get('/edit-reservation/{reservation_id}', 'editReservation')->name('admin.edit-reservation');
        Route::post('/edit-reservation/{reservation_id}', 'editReservationSubmit')->name('admin.edit-reservation');
        Route::post('/delete-reservation', 'deleteReservation')->name('admin.delete-reservation');
    });

    // Team Control
    Route::controller(teamController::class)->group(function () {
        Route::get('/add-team', 'addTeam')->name('admin.add-team');
        Route::post('/add-team', 'addTeamSubmit')->name('admin.add-team');
        Route::get('/view-team', 'viewTeam')->name('admin.view-team');
        Route::get('/edit-team/{team_id}', 'editTeam')->name('admin.edit-team');
        Route::post('/edit-team/{team_id}', 'editTeamSubmit')->name('admin.edit-team');
        Route::post('/delete-team', 'deleteTeam')->name('admin.delete-team');
    });
});
