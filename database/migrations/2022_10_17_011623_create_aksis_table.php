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
        Schema::create('aksis', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('kategori')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->unsignedBigInteger('creator_id');
            $table->boolean('setuju')->comment("pernyataan setuju");
            $table->string('publish_st')->nullable();
            $table->date('publish_at')->nullable();

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
        Schema::dropIfExists('aksis');
    }
};
