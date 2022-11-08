<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aksi_id');
            $table->unsignedBigInteger('payment_user_id');
            $table->unsignedBigInteger('aksi_penerima_id');
            $table->double("payment");
            $table->dateTime("request_payment");
            $table->dateTime("payment_date")->nullable();
            $table->string("payment_status");
            $table->string("payment_type");
            $table->string("xendit_transaction_id")->nullable();
            $table->string("channel_code")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('donasi_payments');
    }
};
