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
        Schema::create('aksi_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("aksi_id");
            $table->integer('root_id');
            $table->text("comment");
            $table->unsignedBigInteger("creator_id");


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
        Schema::dropIfExists('aksi_comments');
    }
};
