<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockgrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blockgrant', function (Blueprint $table) {
            $table->id();
            $table->string('tahun',255)->nullable();
            $table->string('jns_bantuan',255)->nullable();
            $table->string('sumber_bantuan',255)->nullable();
            $table->string('besar_bantuan',255)->nullable();
            $table->string('dana_pendamping',255)->nullable();
            $table->string('peruntukan_dana',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blockgrant');
    }
}
