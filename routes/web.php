<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('cars.booking');
Route::get('/carslist', [App\Http\Controllers\IndexController::class, 'getCarsList'])->name('cars.list');
Route::get('/bookinglist', [App\Http\Controllers\BookingController::class, 'carBookedList'])->name('booking.list');
Route::get('/getCartitems',  [App\Http\Controllers\BookingController::class, 'getCartItems'])->name('get-cartitems');
Route::get('/proceedCheckout', [App\Http\Controllers\BookingController::class, 'proceedCheckout'])->name('proceed.checkout');
Route::get('/checkout', [App\Http\Controllers\BookingController::class, 'checkOut'])->name('checkout');
Route::post('/addToBooking', [App\Http\Controllers\BookingController::class, 'addToBooking'])->name('add.booking');
Route::get('stripe/payment', [App\Http\Controllers\CheckOutController::class, 'payment'])->name('stripe.payment');
Route::get('stripe/payment/success', [App\Http\Controllers\CheckOutController::class, 'paymentSuccess'])->name('stripe.payment.success');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/select-location', [App\Http\Controllers\IndexController::class, 'selectTravelLocation'])->name('select.location');
// Route::get('/select-location', [App\Http\Controllers\IndexController::class, 'selectTravelLocation'])->name('select.location');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('admin.cars.index');
    Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('admin.cars.store');
    Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
    Route::patch('/cars/{car}', [App\Http\Controllers\CarController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{car}', [App\Http\Controllers\CarController::class, 'destroy'])->name('cars.delete');
    Route::get('/get-brand-items/{category}', [App\Http\Controllers\CarController::class, 'getBrandItem'])->name('cars.brandItems');
});
