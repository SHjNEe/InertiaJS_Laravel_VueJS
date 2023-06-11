<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\RealtorListingController;

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

Route::get('/show', [IndexController::class, 'show']);
Route::get('/', [IndexController::class, 'index'])->middleware('auth');

Route::resource('listing', ListingController::class);
// Route::resource('listing', ListingController::class)->excerpt(['index'])->middleware('auth');

// Route::resource('listing', ListingController::class)
//     ->except(['destroy']);
Route::get('login', [AuthController::class, 'create'])
    ->name('login');
Route::post('login', [AuthController::class, 'store'])
    ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
    ->name('logout');
Route::resource('user-account', UserAccountController::class)
    ->only(['create', 'store']);

Route::prefix('realtor')->name('realtor.')->middleware('auth')->group(function () {
    Route::resource('listing', RealtorListingController::class);
});
