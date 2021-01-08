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


Route::resource('myorders', \App\Http\Controllers\MyOrdersController::Class);
Route::resource('myorders.offers', \App\Http\Controllers\MyOrderOffersController::Class);
Route::resource('myoffers', \App\Http\Controllers\AllMyOffersController::Class);
Route::resource('orders', \App\Http\Controllers\OrdersController::Class);
Route::resource('orders.offer', \App\Http\Controllers\MyOfferController::Class);





require __DIR__.'/auth.php';
