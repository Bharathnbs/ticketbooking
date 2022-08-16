<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\LocationsController;

// Route::middleware('guest')->controller(UsersloginController::class)->prefix('login')->name('login')->group(function () {
//         Route::get('/', 'login');
//         Route::post('/', 'authenticate')->name('.post');
// });

Route::prefix('admin')->name('admin.')->group(function() {
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
                Route::post('/{id}/update', 'edit')->name('edit');
        });
});
