<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;

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

require __DIR__.'/auth.php';

//Route::get('/', [ProductController::class, 'index']);
Route::get('/buy/{product}', [ProductController::class, 'buy'])->name('buy.product');
Route::post('/create-payment-intent', [PaymentController::class, 'createPaymentIntent']);

Route::get('/charge-checkout', function (Request $request) {
    return view('checkout.checkout'); // You can create a checkout blade view for this route
})->middleware('auth');

Route::post('/process-checkout', [CheckoutController::class, 'processCheckout'])->name('process-checkout');
Route::get('/checkout-success', function () {
    return view('checkout.checkout-success');
})->name('checkout-success');

