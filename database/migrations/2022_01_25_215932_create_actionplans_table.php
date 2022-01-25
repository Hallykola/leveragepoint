<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actionplans', function (Blueprint $table) {
            $table->id();
            $table->string('assesmentno');
            $table->string('status');
            $table->string('interventiondate');
            $table->string('interventiontype');
            $table->string('summary');
            $table->string('template');
            $table->string('details');
            $table->string('actionitems');
            $table->string('attachments');
            $table->string('comments');
            $table->string('statushistory');
            $table->string('audithistory');

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
        Schema::dropIfExists('actionplans');
    }
}
