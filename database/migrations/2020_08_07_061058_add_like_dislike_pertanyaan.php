<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLikeDislikePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeDislikePertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id')->nullable();
            $table->unsignedBigInteger('profil_id')->nullable();
            
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->integer('poin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likeDislikePertanyaan');
    }
}
