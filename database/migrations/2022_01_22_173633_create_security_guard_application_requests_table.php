<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityGuardApplicationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_guard_application_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('placeofbirth');
            $table->string('dateofbirth');
            $table->string('gender');
            $table->string('nationality');
            $table->string('omangnumber');
            $table->string('omangplaceofissue');
            $table->string('omangexpirydate');
            $table->string('passportnumber');
            $table->string('passportplaceofissue');
            $table->string('passportexpirydate');
            $table->string('residentialaddress');
            $table->string('contactphone');
            $table->string('email');
            $table->string('currentemployername');
            $table->string('currentemployeraddress');
            $table->string('currentemployerpostaladdress');
            $table->string('currentemployerphone');
            $table->string('currentemployerfax');
            $table->string('currentemployeremail');
            $table->string('currentemployername');
            $table->string('previousemployerdetails');
            $table->string('academicinfo');
            $table->string('exconvict');
            $table->string('convictiondetails');
            $table->string('contactpersondetails');
            $table->string('currentemployername');
            $table->string('supervisorsfullname');
            $table->string('supervisorsomangno');
            $table->string('supervisorspassportno');
            $table->string('supervisorslastaddress');
            $table->string('formeremployeepersonelno');
            $table->string('supervisorsfullname');

            //
            $table->string('particularofservice');
            $table->string('headofficestreetaddress');
            $table->string('telephone');
            $table->string('fascimilenumber');
            $table->string('emailaddress');
            $table->string('address');
            $table->string('postaladdress');
            $table->string('dateoftermination');
            $table->string('capacityemployedin');
            $table->string('reasonfortermination');
            $table->string('formerparticularsofmisconduct');
            $table->string('disciplinaryproceedingdetail');
            $table->string('supervisorsfullname');
            $table->string('validid');
            $table->string('healthcertificate');
            $table->string('supportingdocuments');
            $table->string('anotherfullname');
            $table->string('anotherfullnameposition');
            $table->string('fullnameagain');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('security_guard_application_requests');
    }
}
