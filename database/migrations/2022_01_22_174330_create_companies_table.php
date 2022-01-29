<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('form');
            $table->string('user_id');
            $table->string('applicantname');
            $table->string('applicationnumber');
            $table->string('applicantadd');
            $table->string('appliedfor');
            $table->string('director1name');
            $table->string('director2name');
            $table->string('director1address');
            $table->string('director2address');
            $table->string('director1nationality');
            $table->string('director2nationality');
            $table->string('shareholder1name');
            $table->string('shareholder2name');
            $table->string('shareholder1address');
            $table->string('shareholder2address');
            $table->string('shareholder1nationality');
            $table->string('shareholder2nationality');



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
        Schema::dropIfExists('companies');
    }
}
