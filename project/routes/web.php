<?php

use App\Http\Controllers\AllMyOffersController;
use App\Http\Controllers\MyOfferController;
use App\Http\Controllers\MyOrderOffersController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\OrdersController;
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


Route::resource('myorders', MyOrdersController::Class)->middleware('auth');
Route::resource('myorders.offers', MyOrderOffersController::Class)->middleware('auth');
Route::resource('myoffers', AllMyOffersController::Class)->middleware('auth');
Route::get('orders', OrdersController::Class)->middleware('auth');
Route::resource('orders.offer', MyOfferController::Class)->middleware('auth');





require __DIR__.'/auth.php';
