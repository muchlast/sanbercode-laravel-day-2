<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLikeDislikeJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeDislikeJawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin')->nullable();
            // $table->primary(['jawaban_id', 'profil_id']);
            // $table->foreign('jawaban_id')->reference('id')on('pertanyaan');
            // $table->foreign('jawaban_id')->reference('id')on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likeDislikeJawaban');
    }
}
