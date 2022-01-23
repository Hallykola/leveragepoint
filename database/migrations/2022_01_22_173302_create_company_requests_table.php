<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('firstapplication');
            $table->string('licencenumber');
            $table->string('prevlicencerejected');
            $table->string('prevlicencesurrendered');
            $table->string('prevlicencecancelled');
            $table->string('personsemployed');
            $table->string('valididurl');
            $table->string('taxclearanceurl');
            $table->string('otherdocumentsurl');
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
        Schema::dropIfExists('company_requests');
    }
}
