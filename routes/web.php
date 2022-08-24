<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserBookingsController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\LocationsController;
use App\Http\Controllers\Admin\TheatresController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::name('user.')->group(function (){

	Route::middleware('guest')->controller(AuthController::class)->prefix('login')->name('login')->group(function(){
					Route::get('/', 'login');
					Route::post('/', 'authenticate')->name('.post');
	});

	Route::controller(UsersController::class)->prefix('users')->name('users.')->group(function (){
					Route::get('/create', 'create')->name('create');
					Route::post('/create', 'store')->name('store');
	});

	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	// Route::controller(UserBookingsController::class)->prefix('bookings')->name('bookings.')->group(function(){
	//         Route::get('/{id}/create', 'create')->name('create');
	//         Route::post('/{id}/create', 'store')->name('store');
	// });
});


Route::prefix('admin')->name('admin.')->group(function() {

	Route::middleware('guest')->controller(AdminLoginController::class)->prefix('login')->name('login')->group(function () {
					Route::get('/', 'login');
					Route::post('/', 'authenticate')->name('.post');
	});

	Route::middleware('auth:admin')->group(function() {
		Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
		Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

		Route::controller(CustomersController::class)->prefix('users')->name('users.')->group(function (){
						Route::get('/', 'index')->name('index');
						Route::get('/create', 'create')->name('create');
						Route::post('/create', 'store')->name('store');
						Route::get('/{id}/update', 'edit')->name('edit');
						Route::post('/{id}/update', 'update')->name('update');
						Route::get('/{id}/delete', 'delete')->name('delete');
		});
		
		Route::controller(AdminsController::class)->prefix('admins')->name('admins.')->group(function (){
						Route::get('/', 'index')->name('index');
						// Route::get('/create', 'create')->name('create');
						// Route::post('/create', 'store')->name('store');
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

});
