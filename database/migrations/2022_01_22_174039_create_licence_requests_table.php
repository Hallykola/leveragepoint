<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licence_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('type');
            $table->string('applicationnumber');
            $table->string('applicantname');
            $table->string('town');
            $table->string('submittedby');
            $table->string('applicationdate');
            $table->string('status');
            $table->string('applicant');

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
        Schema::dropIfExists('licence_requests');
    }
}
