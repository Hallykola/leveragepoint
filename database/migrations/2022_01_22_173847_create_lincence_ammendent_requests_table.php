<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLincenceAmmendentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lincence_ammendent_requests', function (Blueprint $table) {
            $table->id();
            $table->string('applicantname');
            $table->string('licencenumber');
            $table->string('extra');
            $table->string('applicantphonenumber');
            $table->string('applicantemailaddress');
            $table->string('applicantfax');
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
        Schema::dropIfExists('lincence_ammendent_requests');
    }
}
