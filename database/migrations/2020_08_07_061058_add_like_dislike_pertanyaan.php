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
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin')->nullable();
            // $table->primary(['pertanyaan_id', 'profil_id']);
            // $table->foreign('pertanyaan_id')->reference('id')on('pertanyaan');
            // $table->foreign('pertanyaan_id')->reference('id')on('profil');
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
