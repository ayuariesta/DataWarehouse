<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pras',255)->nullable();
            $table->string('ket',255)->nullable();
            $table->string('panjang',255)->nullable();
            $table->string('lebar',255)->nullable();
            $table->string('konkerusakan_pondasi',255)->nullable();
            $table->string('konkerusakan_skb',255)->nullable();
            $table->string('konkerusakan_plesterstruktur',255)->nullable();
            $table->string('konkerusakan_kudakkuda',255)->nullable();
            $table->string('konkerusakan_kasoatap',255)->nullable();
            $table->string('konkerusakan_reng',255)->nullable();
            $table->string('konkerusakan_penutupatap',255)->nullable();
            $table->string('konkerusakan_rangkaplafon',255)->nullable();
            $table->string('konkerusakan_tutupplafon',255)->nullable();
            $table->string('konkerusakan_batadinding',255)->nullable();
            $table->string('konkerusakan_plesterdinding',255)->nullable();
            $table->string('konkerusakan_daunpintu',255)->nullable();
            $table->string('konkerusakan_kusen',255)->nullable();
            $table->string('konkerusakan_tutuplantai',255)->nullable();
            $table->string('konkerusakan_inslistrik',255)->nullable();
            $table->string('konkerusakan_insair',255)->nullable();
            $table->string('konkerusakan_drainase',255)->nullable();
            $table->string('konkerusakan_finplafon',255)->nullable();
            $table->string('konkerusakan_findinding',255)->nullable();
            $table->string('konkerusakan_finkusen',255)->nullable();
            $table->string('konkerusakan_presentasekerusakan',255)->nullable();
            $table->string('status_kep',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prasarana');
    }
}
