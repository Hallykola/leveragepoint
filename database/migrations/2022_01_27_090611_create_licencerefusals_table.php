<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencerefusalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencerefusals', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('refusalnumber');
            $table->string('refusaldate');
            $table->string('applicant');
            $table->string('status');       
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
        Schema::dropIfExists('licencerefusals');
    }
}
