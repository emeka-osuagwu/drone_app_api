<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');
            $table->integer('post_id');
            $table->integer('payment_status')->default(0);
            $table->string('customer_code');
            $table->integer('customer_id');
            $table->string('card_type')->nullable();
            $table->string('payment_type')->nullable();
            $table->date('transaction_date');
            $table->string('narration')->nullable();
            
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
        Schema::drop('payments');
    }
}
