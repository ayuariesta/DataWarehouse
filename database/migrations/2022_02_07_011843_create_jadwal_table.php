<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('ruang',255)->nullable();
            $table->string('pembelajaran_jamke',255)->nullable();
            $table->string('senin',255)->nullable();
            $table->string('selasa',255)->nullable();
            $table->string('rabu',255)->nullable();
            $table->string('kamis',255)->nullable();
            $table->string('jumat',255)->nullable();
            $table->string('sabtu',255)->nullable();
            $table->string('minggu',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
