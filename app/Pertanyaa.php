<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaa extends Model
{
    protected $table = "pertanyaan";

    protected $fillable = ["judul", "isi"]; 
    //perbedaan guarded dan fillable
    //guarded -> membatasi mana yang tidak boleh diisi / memblacklist
    //fillabel -> memberi keterangan mana yang bisa diisi
}
