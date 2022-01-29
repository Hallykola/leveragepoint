<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SurrenderlicenceController;
use App\Http\Controllers\ChangeOwnershipRequestsController;
use App\Mail\NotificationEmail;
use Illuminate\Support\Facades\Mail;
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
Route::get('login',[AuthenticatedSessionController::class,'signin'])->name('login');

Route::get('/sendtest',function(){
    $details = ['title'=>'Test mail', 'body'=>'test mail from leverage point'];
    Mail::to('haliruyusuf6@gmail.com')->send(new NotificationEmail($details));
// $arrayEmails = ['someone@mail.com','stranger@mail.com'];
// $emailSubject = 'My Subject';
// $emailBody = 'Hello, this is my message content.';

// Mail::send('emails.normal',
// 	['msg' => $emailBody],
// 	function($message) use ($arrayEmails, $emailSubject) {
// 		$message->to($arrayEmails)
//         ->subject($emailSubject);
// 	}
// );
return view('dashboard');
})->name('emailtest');


Route::middleware('auth')->group(function() {
  Route::get('/dashboard',[PagesController::class,'dashboard'])->name('dashboard');
  Route::get('/profile',[ProfileController::class,'show'])->name('profile');
  Route::get('/profiledetails',[ProfileController::class,'profiledetails'])->name('profiledetails');
  Route::get('/payments',[PagesController::class,'Payments'])->name('payments');
  Route::get('/licences', [PagesController::class, 'Licences'])->name('licences');
  Route::get('/meetings',[PagesController::class, 'Meetings'])->name('meetings');
  Route::get('/reports',[PagesController::class, 'Reports'])->name('reports');
  Route::get('/support',[PagesController::class, 'Support'])->name('support');
  Route::get('requests',[PagesController::class, 'Requests'])->name('requests');

  
  Route::get('/changeownership',[ChangeOwnershipRequestsController::class,'create'])->name('showcoform');
  Route::post('/newchangeownership',[ChangeOwnershipRequestsController::class,'store'])->name('storeco');
  Route::get('/viewchangeownership/{appno}/',[ChangeOwnershipRequestsController::class,'show'])->name('viewchangeownership');
  Route::get('/listchangeownerships',[ChangeOwnershipRequestsController::class,'index'])->name('listco');
  
  Route::get('/surrenderlicence',[SurrenderlicenceController::class,'create'])->name('showslform');
  Route::get('/newsurrenderlicence',[SurrenderlicenceController::class,'showform'])->name('storesl');
  Route::get('/viewsurrenderlicence',[SurrenderlicenceController::class,'show'])->name('showsl');
  Route::get('/listsurrenderlicence',[SurrenderlicenceController::class,'index'])->name('listsl');
  
  
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
  Route::post('/updateprofile',[ProfileController::class,'update'])->name('updateprofile');
});
require __DIR__.'/auth.php';
