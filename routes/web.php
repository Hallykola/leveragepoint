<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


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
use App\Models\ChangeOwnershipRequests;
use App\Models\LicenceRenewalRequest;
use App\Models\renewlicenceone;
use App\Models\renewlicencetwo;
use App\Models\User;
use App\Notifications\ChangeofOwnershipNotification;
use App\Notifications\NewLicenceNotification;
use App\Notifications\RenewLicenceNotification;
use Illuminate\Support\Facades\Auth;
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

Route::get('/notify',function(){
    $user = Auth::user();

    $admins = User::where('usertype','ADMIN')->get();
    foreach($admins as $admin){
        Notification::send($admin,new NewLicenceNotification($user->profile));

    }

    Notification::send($user,new NewLicenceNotification($user->profile));
});
Route::get('/dismissnotifications',function(){
    $user = Auth::user();
    $user->unreadNotifications->markAsRead();
    return redirect(route('dashboard'));
});
Route::get('/sendtest',function(Request $request){
    $ip = $request->ip();
    Mail::raw('Hi na test mail from '. $ip, function($message){
        $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $message->to('haliruyusuf6@gmail.com','User Name');
    });


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
    Route::get('/requests',[PagesController::class, 'Requests'])->name('requests');

    Route::get('/setuserrole',[PagesController::class, 'setuserrole'])->name('setuserrole');
    Route::post('setuserrolescript',[PagesController::class, 'setuserrolescript'])->name('setuserrolescript');


    //route to change of ownership first page
    Route::get('/changeownership',[ChangeOwnershipRequestsController::class,'create'])->name('showcoform');
    // route to change of ownership second form page
    Route::get('/changeownershipb',[ChangeOwnershipRequestsController::class,'showb'])->name('changeownershipb');
    //route that change ownership  second form page submits to
    Route::post('/updatechangeownershipb',[ChangeOwnershipRequestsController::class,'updateb'])->name('updateb');

    // route that change of ownership first page form submits to
    Route::post('/newchangeownership',[ChangeOwnershipRequestsController::class,'update'])->name('storeco');
    // route that shows an already filled change of ownership form first page
    Route::get('/viewchangeownership/{appno}/',[ChangeOwnershipRequestsController::class,'show'])->name('viewchangeownership');
    // route that has a table to display all change of ownership application forms
    Route::get('/listchangeownerships',[ChangeOwnershipRequestsController::class,'index'])->name('listco');

    //route that shows surrender licence form
    Route::get('/surrenderlicence',[SurrenderlicenceController::class,'create'])->name('showslform-a');
    // route that shows an already filled surrender licence form by  its form number
    Route::get('/surrenderlicence/{id}',[SurrenderlicenceController::class,'show'])->name('showslform');
    // route that surrender form page submits its form to
    Route::post('/updatesurrenderlicence',[SurrenderlicenceController::class,'update'])->name('storesl');
    Route::get('/viewsurrenderlicence',[SurrenderlicenceController::class,'show'])->name('showsl');
    Route::get('/listsurrenderlicence',[SurrenderlicenceController::class,'index'])->name('listsl');

    Route::get('/ammendmentoflicence',[LicenceAmmendentRequestController::class,'create'])->name('ammendlicence');
    Route::post('/updateammendmentoflicence',[LicenceAmmendentRequestController::class,'update'])->name('ammendl');
    Route::get('/viewammendmentoflicence/{appno}/',[LicenceAmmendentRequestController::class,'show'])->name('showl');
    Route::get('/listammendmentoflicence',[LicenceAmmendentRequestController::class,'index'])->name('listsl');

    Route::get('/registercompany',[CompaniesController::class,'create'])->name('showcomform');
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

    Route::get('/listchangeofownership',[ChangeOwnershipRequestsController::class,'index'])->name('lischangeofownership');
    Route::get('/listammendmentoflicence',[LicenceAmmendentRequestController::class,'index'])->name('listammendment');
    Route::get('/listsurrenderlicence',[SurrenderlicenceController::class,'index'])->name('listsurrender');
    Route::get('/listpayments',[PaymentsController::class,'index'])->name('listpayment');
    Route::get('/listrenewlicence',[RenewlicenceoneController::class,'index'])->name('listrenewal');
    Route::get('/listlicences',[CompanyRequestsController::class,'index'])->name('listrenewal');

    Route::get('/training', [PagesController::class,'Training'])->name('training');

    Route::get('/hrm',[PagesController::class,'HRM'])->name('hrm');



    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::post('/updateprofile',[ProfileController::class,'update'])->name('updateprofile');

});


require __DIR__.'/auth.php';
