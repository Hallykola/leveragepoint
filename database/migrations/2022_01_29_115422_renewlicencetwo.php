<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Renewlicencetwo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('renewlicencetwo', function (Blueprint $table) {
            $table->id();
            $table->string('form');
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
        //
        Schema::dropIfExists('renewlicencetwo');

    }
}
