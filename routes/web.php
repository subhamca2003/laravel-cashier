<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

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
Route::get('/', [ProductController::class, 'index']);
Route::get('/buy/{product}', [ProductController::class, 'buy'])->name('buy.product');
Route::post('/create-payment-intent', [PaymentController::class, 'createPaymentIntent']);
