<?php

use App\Http\Controllers\AllMyOffersController;
use App\Http\Controllers\DashbardController;
use App\Http\Controllers\MyOfferController;
use App\Http\Controllers\MyOrderOffersController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PriorityPostController;
use App\Http\Controllers\RateController;
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
})->name('/');


Route::get('/dashboard', DashbardController::class)->middleware(['auth'])->name('dashboard');


Route::resource('myorders', MyOrdersController::Class)->middleware('auth');
Route::resource('myorders.offers', MyOrderOffersController::Class)->middleware('auth');
Route::get('myoffers', AllMyOffersController::Class)->middleware('auth')->name('myoffers');
Route::resource('orders', OrdersController::Class)->only(['index', 'show'])->middleware('auth');
Route::post('update', PriorityPostController::class);
Route::post('rate', RateController::class);
Route::post('orders/{order}/offer/{offer}/accept', [MyOfferController::class, 'accept_offer'] )
    ->name('orders.offer.accept')
    ->middleware('auth');
Route::get('orders/{order}/offer/{offer}/finish', [MyOfferController::class, 'finish_offer'] )
    ->name('orders.offer.finish')
    ->middleware('auth');
Route::resource('orders.offer', MyOfferController::Class)->except(['index'])->middleware('auth');

require __DIR__.'/auth.php';
