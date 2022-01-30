<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeOwnershipRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_ownership_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('applicantphone');
            $table->string('applicantaddress');
            $table->string('applicantfax');
            $table->string('transfereeid');
            $table->string('clearancecertificate');
            $table->string('otherdocuments');
            $table->string('applicantname');
            $table->string('licencenumber');
            $table->string('nameoftransferee');
            $table->string('licenceephysicaladdress');
            $table->string('licenceepostaladdress');
            $table->string('form');
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
        Schema::dropIfExists('change_ownership_requests');
    }
}
