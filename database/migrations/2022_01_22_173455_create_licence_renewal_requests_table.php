<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenceRenewalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licence_renewal_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('licencenumber');
            $table->string('rejectedcancelledsurrendered');
            $table->string('numberofemployees');
            $table->string('validid');
            $table->string('taxclearance');
            $table->string('otherdocuments');

            $table->string('applicantname');
            $table->string('applicantaddress');
            $table->string('privateserviceappliedfor');
            $table->string('directorsofapplicant');
            $table->string('beneficialshareholders');
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
        Schema::dropIfExists('licence_renewal_requests');
    }
}
