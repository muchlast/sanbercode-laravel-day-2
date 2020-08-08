<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi', 255);
            $table->timestamps();
            // $table->unsignedBigInteger('pertanyaan_id')->nullable();
            // $table->unsignedBigInteger('profil_id')->nullable();

            // $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            // $table->foreign('profil_id')->references('id')->on('profil');
            });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
