<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('meetingid');
            $table->string('meetingdate');
            $table->string('purpose');
            $table->string('status');
            $table->string('meetingnumber');
            $table->string('facilitator');
            $table->string('meetingcalledby');
            $table->string('meetingtype');
            $table->string('notetaker');
            $table->string('timekeeper');
            $table->string('subject');
            $table->string('startdatentime');
            $table->string('enddatentime');
            $table->string('location');
            $table->string('label');
            $table->string('description');

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
        Schema::dropIfExists('meetings');
    }
}
