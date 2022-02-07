<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaDidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->string('nama_pd',255)->nullable();
            $table->string('nipd',20)->nullable();
            $table->string('jenis_kelamin',100)->nullable();
            $table->string('nisn',50)->nullable();
            $table->string('tmp_lhr',50)->nullable();
            $table->string('tgl_lhr')->nullable();
            $table->string('nik_pd',40)->unique()->primary();
            $table->string('agama',30)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('rt',10)->nullable();
            $table->string('rw',10)->nullable();
            $table->string('dusun',50)->nullable();
            $table->string('kelurahan',50)->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('kode_pos',10)->nullable();
            $table->string('jenis_tinggal',50)->nullable();
            $table->string('transportasi',50)->nullable();
            $table->string('no_telp',20)->nullable();
            $table->string('no_hp',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('skhun',100)->nullable();
            $table->string('penerima_kps',255)->nullable();
            $table->string('no_kps',30)->nullable();
            $table->string('nama_ayah',255)->nullable();
            $table->string('thn_lhr_ayah',20)->nullable();
            $table->string('pend_ayah',100)->nullable();
            $table->string('pekerjaan_ayah',100)->nullable();
            $table->string('penghasilan_ayah',100)->nullable();
            $table->string('nik_ayah',20)->nullable();
            $table->string('nama_ibu',255)->nullable();
            $table->string('thn_lhr_ibu',20)->nullable();
            $table->string('pend_ibu',100)->nullable();
            $table->string('pekerjaan_ibu',100)->nullable();
            $table->string('penghasilan_ibu',100)->nullable();
            $table->string('nik_ibu',20)->nullable();
            $table->string('nama_wali',255)->nullable();
            $table->string('thn_lhr_wali',20)->nullable();
            $table->string('pend_wali',100)->nullable();
            $table->string('pekerjaan_wali',100)->nullable();
            $table->string('penghasilan_wali',100)->nullable();
            $table->string('nik_wali',20)->nullable();
            $table->string('tingkat_rombel',50)->nullable();
            $table->string('no_peserta_un',50)->nullable();
            $table->string('no_seri_ijazah',50)->nullable();
            $table->string('penerima_kip',20)->nullable();
            $table->string('nomor_kip',20)->nullable();
            $table->string('nama_kip',255)->nullable();
            $table->string('no_kks',50)->nullable();
            $table->string('no_regis_akta',50)->nullable();
            $table->string('bank',50)->nullable();
            $table->string('no_rek_bank',50)->nullable();
            $table->string('rekening_atas_nama',255)->nullable();
            $table->string('layak_pip',255)->nullable();
            $table->string('alasan_pip',255)->nullable();
            $table->string('keb_khusus',255)->nullable();
            $table->string('sekolah_asal',100)->nullable();
            $table->string('anak_ke',20)->nullable();
            $table->string('lintang',100)->nullable();
            $table->string('bujur',100)->nullable();
            $table->string('no_kk',100)->nullable();
            $table->string('berat_badan',50)->nullable();
            $table->string('tinggi_badan',50)->nullable();
            $table->string('lingkar_kepala',50)->nullable();
            $table->string('jml_saudara',50)->nullable();
            $table->string('jarak_ke_sekolah',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_didik');
    }
}
