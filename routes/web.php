<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TravelPacakgesController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('admin', [DashboardController::class, 'index']);
    Route::resource('gallery', GalleryController::class);
    Route::resource('travel-packages', TravelPacakgesController::class);
    Route::resource('transaction', TransactionController::class);

});
Auth::routes();

Route::get('detail/{slug}', [DetailController::class, 'index'])->name('detail');

Route::group(['middleware' => 'auth'], function(){
    Route::post('/checkout/{id}', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])->name('checkout.remove');
    Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])->name('checkout.success');
});




require __DIR__.'/customer.php';




