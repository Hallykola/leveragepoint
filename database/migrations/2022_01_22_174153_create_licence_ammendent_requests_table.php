<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenceAmmendentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licence_ammendent_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('applicantname');
            $table->string('licencenumber');
            $table->string('extra')->nullable();
            $table->string('applicantphonenumber');
            $table->string('applicantemailaddress');
            $table->string('applicantfax');
            $table->string('form');
            $table->string('town')->nullable();
            $table->string('submittedby')->nullable();
            $table->string('applicationdate')->nullable();
            $table->string('status')->nullable();
            $table->string('applicant')->nullable();
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
        Schema::dropIfExists('licence_ammendent_requests');
    }
}
