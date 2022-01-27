<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('signin',[AuthenticatedSessionController::class,'signin'])->name('signin');


Route::middleware('auth')->group(function() {
  Route::get('/dashboard',[PagesController::class,'dashboard'])->name('dashboard');
  Route::get('/profile',[PagesController::class,'profile'])->name('profile');
  Route::get('/payments',[PagesController::class,'Payments'])->name('payments');
  Route::get('/licences', [PagesController::class, 'Licences'])->name('licences');
  Route::get('/meetings',[PagesController::class, 'Meetings'])->name('meetings');
  Route::get('/reports',[PagesController::class, 'Reports'])->name('reports');
  Route::get('/support',[PagesController::class, 'Support'])->name('support');

  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
  Route::post('/updateprofile',[ProfileController::class,'update'])->name('updateprofile');
  Route::get('/editprofile',[ProfileController::class,'create'])->name('editprofile');


});
require __DIR__.'/auth.php';
