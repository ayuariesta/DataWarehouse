<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tendik', function (Blueprint $table) {
            $table->string('nama_tk',255)->nullable();
            $table->string('nuptk',50)->nullable();
            $table->string('jk',100)->nullable();
            $table->string('tmp_lhr',50)->nullable();
            $table->string('tgl_lhr')->nullable();
            $table->string('nip',20)->unique();
            $table->string('status_kep',100)->nullable();
            $table->string('jenis_ptk',100)->nullable();
            $table->string('agama',100)->nullable();
            $table->string('almt_jln',255)->nullable();
            $table->string('rt',10)->nullable();
            $table->string('rw',10)->nullable();
            $table->string('nm_dusun',100)->nullable();
            $table->string('desa_kelurahan',255)->nullable();
            $table->string('kecamatan',255)->nullable();
            $table->string('kd_pos',100)->nullable();
            $table->string('telp',100)->nullable();
            $table->string('hp',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('tgs_tambahan',100)->nullable();
            $table->string('sk_cpns',100)->nullable();
            $table->string('sk_pengangkatan',100)->nullable();
            $table->string('tmt_pengangkatan')->nullable();
            $table->string('lmbg_pengangkatan',100)->nullable();
            $table->string('pangkat_gol',100)->nullable();
            $table->string('sumber_gaji',100)->nullable();
            $table->string('nm_ibu',255)->nullable();
            $table->string('status_perkawinan',100)->nullable();
            $table->string('nm_suami_istri',255)->nullable();
            $table->string('nip_suami_istri',100)->nullable();
            $table->string('pekerjaan_suami_istri',100)->nullable();
            $table->string('tmt_pns')->nullable();
            $table->string('lisensi',100)->nullable();
            $table->string('diklat_kep',100)->nullable();
            $table->string('keahlian_braille',100)->nullable();
            $table->string('keahlian_bhs_isyarat', 100)->nullable();
            $table->string('npwp',100)->nullable();
            $table->string('nm_wjb_pajak',255)->nullable();
            $table->string('kewarganegaraan',100)->nullable();
            $table->string('bank',100)->nullable();
            $table->string('nmr_rek_bank',100)->nullable();
            $table->string('rek_nama',100)->nullable();
            $table->string('nik_tk', 100)->primary()->unique();
            $table->string('no_kk', 100)->nullable();
            $table->string('karpeg', 100)->nullable();
            $table->string('karis_karsu', 100)->nullable();
            $table->string('lintang', 100)->nullable();
            $table->string('bujur', 100)->nullable();
            $table->string('nuks', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tendik');
    }
}
