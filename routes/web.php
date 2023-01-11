<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TravelPacakgesController;
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

// Route::get('/', function () {
//     return view('customer.home');
// });

// Route::get('detail', function () {
//     return view('customer.detail');
// });

// Route::get('checkout', function () {
//     return view('customer.checkout');
// });

// Route::get('success', function () {
//     return view('customer.success');
// });

// Route::get('admin', function () {
//     return view('admin.dashboard');
// });

// Route::get('login', function () {
//     return view('auth.login');
// });

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('admin', [DashboardController::class, 'index']);
    Route::resource('gallery', GalleryController::class);
});
Auth::routes();

Route::resource('travel-packages', TravelPacakgesController::class);



require __DIR__.'/customer.php';




