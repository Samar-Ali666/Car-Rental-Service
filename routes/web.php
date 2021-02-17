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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');

Route::get('/car', [App\Http\Controllers\SingleCarController::class, 'index'])->name('car');

Route::get('/car/{id}', [App\Http\Controllers\ShopController::class, 'show'])->name('car.single');

Route::group(['middleware'=>'auth'], function() {

	Route::get('/home/history', [App\Http\Controllers\UserHistoryController::class, 'index'])->name('user.history');

	Route::get('/car/checkout/{id}', [App\Http\Controllers\BookingController::class, 'checkout'])->name('checkout.show');

	Route::post('/car/checkout', [App\Http\Controllers\BookingController::class, 'checkoutConfirm'])->name('checkout.confirm');
});

Route::view('/about', 'about')->name('about');

Route::group(['prefix'=>'admin'], function() {

	Route::group(['middleware'=>'auth:admin'], function () {

		Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

		Route::resource('/cars', App\Http\Controllers\AdminCarController::class);

		Route::resource('/categories', App\Http\Controllers\AdminCategoriesController::class);

		Route::get('/bookings/history', [App\Http\Controllers\AdminBookingController::class, 'history'])->name('history.index');

		Route::get('/bookings/history/{id}', [App\Http\Controllers\AdminBookingController::class, 'history_details'])->name('history.details');

		Route::resource('/bookings', App\Http\Controllers\AdminBookingController::class);

		Route::resource('/mails', App\Http\Controllers\AdminMailController::class);
	});

	Route::get('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');

	Route::post('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth');
});
