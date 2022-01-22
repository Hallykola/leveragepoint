<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('emailaddress');
            $table->string('state');
            $table->string('mobilenumber');
            $table->string('address1');
            $table->string('address2');
            $table->string('profilephoto');
            $table->string('gender');
            $table->string('taxclearanceurl');
            $table->string('valididurl');
            $table->string('healthcertificateurl');
            $table->string('accounttype');
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
        Schema::dropIfExists('profiles');
    }
}
