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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('myorders', \App\Http\Controllers\MyOrdersController::Class)->middleware('auth');
Route::resource('myorders.offers', \App\Http\Controllers\MyOrderOffersController::Class)->middleware('auth');
Route::resource('myoffers', \App\Http\Controllers\AllMyOffersController::Class)->middleware('auth');
Route::resource('orders', \App\Http\Controllers\OrdersController::Class)->middleware('auth');
Route::resource('orders.offer', \App\Http\Controllers\MyOfferController::Class)->middleware('auth');





require __DIR__.'/auth.php';
