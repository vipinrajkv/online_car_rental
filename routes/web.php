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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('car.list');
Route::get('/carslist', [App\Http\Controllers\IndexController::class, 'getCarsList'])->name('cars.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/select-location', [App\Http\Controllers\IndexController::class, 'selectTravelLocation'])->name('select.location');
Route::get('/select-location', [App\Http\Controllers\IndexController::class, 'selectTravelLocation'])->name('select.location');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('admin.cars.index');
    Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('admin.cars.create');
    Route::post('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{car}', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{car}', [App\Http\Controllers\CarController::class, 'destroy'])->name('cars.delete');
    Route::get('/get-brand-items/{category}', [App\Http\Controllers\CarController::class, 'getBrandItem'])->name('cars.brandItems');
});
