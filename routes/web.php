<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\SendEmailControler;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/email/send', [SendEmailControler::class, 'send'])->name('email.send');
});


Route::get('/hardCoded', function(){
   return view('show-hard-coded');
});
Route::get('parkingSpace/old-new', [ParkingSpaceController::class, 'fromOldToNew'])->name('parkingSpace.old-new');
Route::get('parkingSpace/new-old', [ParkingSpaceController::class, 'fromNewToOld'])->name('parkingSpace.new-old');
Route::resource('/parkingSpace', ParkingSpaceController::class)->middleware(['auth','verified']);
Route::get('/parkingSpace/{id}/houseRules', [ParkingSpaceController::class, 'houseRules']);

require __DIR__.'/auth.php';

