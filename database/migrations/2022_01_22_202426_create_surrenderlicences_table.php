<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurrenderlicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surrenderlicences', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('form');
            $table->string('applicantname');
            $table->string('licencenumber');
            $table->string('reasonsforsurrendering');
            $table->string('applicantphone');
            $table->string('applicantemail');
            $table->string('applicantfax');
            $table->string('status')->default('WAITING');

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
        Schema::dropIfExists('surrenderlicences');
    }
}
