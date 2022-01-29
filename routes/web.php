<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SurrenderlicenceController;
use App\Http\Controllers\ChangeOwnershipRequestsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompanyRequestsController;
use App\Http\Controllers\LicenceAmmendentRequestController;
use App\Http\Controllers\LicenceRenewalRequestController;
use App\Http\Controllers\RenewlicenceoneController;
use App\Http\Controllers\RenewlicencetwoController;
use App\Mail\NotificationEmail;
use App\Models\LicenceRenewalRequest;
use App\Models\renewlicenceone;
use App\Models\renewlicencetwo;
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
  Route::get('/changeownershipb',[ChangeOwnershipRequestsController::class,'showb'])->name('changeownershipb');
  Route::post('/updatechangeownershipb',[ChangeOwnershipRequestsController::class,'updateb'])->name('showcoform');

  Route::post('/newchangeownership',[ChangeOwnershipRequestsController::class,'update'])->name('storeco');
  Route::get('/viewchangeownership/{appno}/',[ChangeOwnershipRequestsController::class,'show'])->name('viewchangeownership');
  Route::get('/listchangeownerships',[ChangeOwnershipRequestsController::class,'index'])->name('listco');

  Route::get('/surrenderlicence',[SurrenderlicenceController::class,'create'])->name('showslform');
  Route::post('/updatesurrenderlicence',[SurrenderlicenceController::class,'update'])->name('storesl');
  Route::get('/viewsurrenderlicence',[SurrenderlicenceController::class,'show'])->name('showsl');
  Route::get('/listsurrenderlicence',[SurrenderlicenceController::class,'index'])->name('listsl');

  Route::get('/ammendmentoflicence',[LicenceAmmendentRequestController::class,'create'])->name('ammendlicence');
  Route::post('/upadateammendmentoflicence',[LicenceAmmendentRequestController::class,'update'])->name('ammendl');
  Route::get('/viewammendmentoflicence/{appno}/',[LicenceAmmendentRequestController::class,'show'])->name('showl');
  Route::get('/listammendmentoflicence',[LicenceAmmendentRequestController::class,'index'])->name('listsl');


    Route::get('/registercompany',[CompaniesController::class,'create'])->name('showcoform');
    Route::get('/registercompany/{id}',[CompaniesController::class,'createwithid'])->name('showcomformid');
    Route::post('/updateregistercompanyform',[CompaniesController::class,'update'])->name('regformupdate');
    Route::post('/newcomanyregistration',[CompaniesController::class,'store'])->name('storeco');
    Route::get('/viewcompanyregform/{appno}/',[CompaniesController::class,'show'])->name('viewchangeownership');
    Route::get('/listofcompanyregistrations',[CompaniesController::class,'index'])->name('listco');

    Route::get('/registercompanyb',[CompanyRequestsController::class,'create'])->name('registercompanyb');
    Route::get('/registercompanyb/{id}',[CompanyRequestsController::class,'createwithid'])->name('showcomformid');
    Route::post('/updateregistercompanyformb',[CompanyRequestsController::class,'update'])->name('regformupdate');

    Route::get('/payment/{amount}/{form}',[PaymentsController::class,'create'])->name('payment');
    Route::post('/pay',[PaymentsController::class,'store'])->name('pay');
    Route::get('/paymentsuccessful/{amount}/{form}',[PaymentsController::class,'success'])->name('paymentsuccessful');

    Route::get('/renewlicence',[RenewlicenceoneController::class,'create'])->name('renewlicence');
    Route::get('/renewlicence/{id}',[RenewlicenceoneController::class,'createwithid'])->name('showcomformid');
    Route::post('/updaterenewlicenceform',[RenewlicenceoneController::class,'update'])->name('regformupdate');

    Route::get('/renewlicenceb',[RenewlicencetwoController::class,'create'])->name('renewlicenceb');
    Route::get('/renewlicenceb/{id}',[RenewlicencetwoController::class,'createwithid'])->name('showcomformid');
    Route::post('/updaterenewlicenceformb',[RenewlicencetwoController::class,'update'])->name('regformupdate');

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::post('/updateprofile',[ProfileController::class,'update'])->name('updateprofile');

});

Route::get('/mail/{email}', function ($email)
{
    mail($email,"Test","Hello, Test Mail");

});

require __DIR__.'/auth.php';
