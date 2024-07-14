<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapHasilBelajarTable extends Migration
{
    public function up()
    {
        Schema::create('rekap_hasil_belajar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nim');
            $table->string('kelas', 10);
            $table->float('ipk');
            $table->integer('semester');
            $table->integer('sks');
            $table->timestamps();

            $table->foreign('nim')->references('id')->on('mahasiswa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekap_hasil_belajar');
    }
}
