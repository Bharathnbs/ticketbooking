<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\LocationsController;
use App\Http\Controllers\Admin\TheatresController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\AdminLoginController;



Route::prefix('admin')->name('admin.')->group(function() {

        Route::middleware('guest')->controller(AdminLoginController::class)->prefix('login')->name('login')->group(function () {
                Route::get('/', 'login');
                Route::post('/', 'authenticate')->name('.post');
        });

        Route::controller(UsersController::class)->prefix('users')->name('users.')->group(function (){
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
        });
        
        Route::controller(AdminsController::class)->prefix('admins')->name('admins.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
        });
        
        Route::controller(LocationsController::class)->prefix('locations')->name('locations.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
                Route::get('/{id}/update', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::get('/{id}/delete', 'delete')->name('delete');
        });

        Route::controller(TheatresController::class)->prefix('theatres')->name('theatres.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
                Route::get('/{id}/update', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::get('/{id}/delete', 'delete')->name('delete');
        });

        Route::controller(MoviesController::class)->prefix('movies')->name('movies.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
                Route::get('/{id}/update', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::get('/{id}/delete', 'delete')->name('delete');
        });

        Route::controller(BookingsController::class)->prefix('bookings')->name('bookings.')->group(function (){
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/create', 'store')->name('store');
                Route::get('/{id}/update', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::get('/{id}/delete', 'delete')->name('delete');
        });
});
