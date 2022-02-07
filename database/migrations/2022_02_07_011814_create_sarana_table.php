<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarana', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sarana',255)->nullable();
            $table->string('letak',255)->nullable();
            $table->string('kepemilikan',255)->nullable();
            $table->string('spesifikasi',255)->nullable();
            $table->string('jumlah',255)->nullable();
            $table->string('laik',255)->nullable();
            $table->string('tdk_laik',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sarana');
    }
}
