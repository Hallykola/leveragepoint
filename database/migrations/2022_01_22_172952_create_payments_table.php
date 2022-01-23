<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('paymentdate');
            $table->string('paymenttype');
            $table->string('amount');
            $table->string('currency');
            $table->string('paymentstatus');

            //
            $table->string('creditcardno');
            $table->string('cardtype');
            $table->string('expiration');
            $table->string('security');
            $table->string('billingaddress');
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
        Schema::dropIfExists('payments');
    }
}
