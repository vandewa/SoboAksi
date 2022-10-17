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
        Schema::create('aksi_penerimas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("aksi_id");
            $table->unsignedSmallInteger("penerima_id");
            $table->double("target_donasi");
            $table->date("target_waktu");
            $table->string("donasi_st");
            $table->double("donasi_tercapai");

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
        Schema::dropIfExists('aksi_penerimas');
    }
};
