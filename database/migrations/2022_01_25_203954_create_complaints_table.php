<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('type');
            $table->string('status');
            $table->string('dateresolved');
            $table->string('datereceived');
            $table->string('dateclosed');
            $table->string('datestarted');
            $table->string('casenumber');
            $table->string('company');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('complaints');
    }
}
