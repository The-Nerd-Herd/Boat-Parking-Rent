<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\SendEmailControler;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/parkingSpace', ParkingSpaceController::class);

Route::get('/parkingSpace/{id}/houseRules', [ParkingSpaceController::class, 'houseRules']);

Route::post('/email/send', [SendEmailControler::class, 'send'])->name('email.send');

Route::get('/parkingSpace/create', [ParkingSpaceController::class, 'createForm']);
Route::post('/parkingSpace/create', [ParkingSpaceController::class, 'fileUpload'])->name('fileUpload');

Route::get('/payment', '\App\Http\Controllers\StripeController@index')->name('index');
Route::post('/checkout', '\App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::get('/success', '\App\Http\Controllers\StripeController@success')->name('success');
require __DIR__.'/auth.php';
