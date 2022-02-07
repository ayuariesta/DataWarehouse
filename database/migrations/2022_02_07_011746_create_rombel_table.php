<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRombelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rombel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rombel',255)->nullable();
            $table->string('tingkat_kelas',100)->nullable();
            $table->string('jum_L',100)->nullable();
            $table->string('jum_P',100)->nullable();
            $table->string('jum_total',100)->nullable();
            $table->string('wali_kls',255)->nullable();
            $table->string('kurikulum',100)->nullable();
            $table->string('ruangan',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rombel');
    }
}
