n <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->string('nama_sekolah',255)->nullable();
            $table->string('npsn', 100)->unique()->primary();
            $table->string('jenjang_pend',100)->nullable();
            $table->string('status',100)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('rt',20)->nullable();
            $table->string('rw',20)->nullable();
            $table->string('kode_pos',50)->nullable();
            $table->string('kelurahan',255)->nullable();
            $table->string('kecamatan',255)->nullable();
            $table->string('kota_kabupaten',255)->nullable();
            $table->string('provinsi',255)->nullable();
            $table->string('negara',255)->nullable();
            $table->string('lintang',100)->nullable();
            $table->string('bujur',100)->nullable();
            $table->string('sk_pendirian_sekolah',255)->nullable();
            $table->string('tgl_sk',100)->nullable();
            $table->string('status_milik',255)->nullable();
            $table->string('sk_izin_operasional',255)->nullable();
            $table->string('tgl_sk_izin',255)->nullable();
            $table->string('keb_khusus_dilayani',255)->nullable();
            $table->string('nomor_rekening',255)->nullable();
            $table->string('nama_bank',100)->nullable();
            $table->string('cabang_kcp',255)->nullable();
            $table->string('rekening_atas_nama',255)->nullable();
            $table->string('mbs',100)->nullable();
            $table->string('memungut_iuran',100)->nullable();
            $table->string('nominal_iuran',100)->nullable();
            $table->string('nama_wajib_pajak',255)->nullable();
            $table->string('npwp',50)->nullable();
            $table->string('no_telp',50)->nullable();
            $table->string('no_fax',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('website',150)->nullable();
            $table->string('waktu_penyelenggaraan',100)->nullable();
            $table->string('bersedia_menerima_bos',50)->nullable();
            $table->string('sertifikasi_iso',100)->nullable();
            $table->string('sumber_listrik',100)->nullable();
            $table->string('daya_listrik',100)->nullable();
            $table->string('akses_internet',100)->nullable();
            $table->string('akses_internet_alternatif',100)->nullable();
            $table->string('sumber_air',100)->nullable();
            $table->string('sumber_air_minum',100)->nullable();
            $table->string('kecukupan_air_bersih',255)->nullable();
            $table->string('menyediakan_jamban',100)->nullable();
            $table->string('tipe_jamban',100)->nullable();
            $table->string('sedia_pembalut_cadangan',255)->nullable();
            $table->string('kegiatan_cuci_tangan',100)->nullable();
            $table->string('jumlah_tempat_cuci_tangan',100)->nullable();
            $table->string('jumlah_tempat_rusak',100)->nullable();
            $table->string('mengalir_di_wastafel',100)->nullable();
            $table->string('saluran_pembuangan_air',100)->nullable();
            $table->string('menguras_tangki_septik',100)->nullable();
            $table->string('selokan',100)->nullable();
            $table->string('tempat_sampah_di_kelas',100)->nullable();
            $table->string('tempat_sampah_di_jamban_perempuan',100)->nullable();
            $table->string('cermin_jamban_perempuan',100)->nullable();
            $table->string('tps_tertutup',100)->nullable();
            $table->string('sampah_diangkut_rutin',100)->nullable();
            $table->string('rencana_sanitasi',100)->nullable();
            $table->string('rutin_merawat_fasilitas',100)->nullable();
            $table->string('ada_pemerintah',100)->nullable();
            $table->string('ada_perusahaan_swasta',100)->nullable();
            $table->string('ada_puskesmas',100)->nullable();
            $table->string('ada_lembaga_non_pemerintah',100)->nullable();
            $table->string('jamban_dpt_digunakan_pria',100)->nullable();
            $table->string('jamban_dpt_digunakan_wanita',100)->nullable();
            $table->string('jamban_dpt_digunakan_bersama',100)->nullable();
            $table->string('jamban_tdk_dpt_pria',100)->nullable();
            $table->string('jamban_tdk_dpt_wanita',100)->nullable();
            $table->string('jamban_tdk_dpt_bersama',100)->nullable();
            $table->boolean('cuci_tangan_guru')->default(0);
            $table->boolean('cuci_tangan_kelas')->default(0);
            $table->boolean('cuci_tangan_toilet')->default(0);
            $table->boolean('cuci_tangan_selasar')->default(0);
            $table->boolean('cuci_tangan_uks')->default(0);
            $table->boolean('cuci_tangan_kantin')->default(0);
            $table->boolean('kebersihan_guru')->default(0);
            $table->boolean('kebersihan_kelas')->default(0);
            $table->boolean('kebersihan_toilet')->default(0);
            $table->boolean('kebersihan_selasar')->default(0);
            $table->boolean('kebersihan_uks')->default(0);
            $table->boolean('kebersihan_kantin')->default(0);
            $table->boolean('pemeliharaan_guru')->default(0);
            $table->boolean('pemeliharaan_kelas')->default(0);
            $table->boolean('pemeliharaan_toilet')->default(0);
            $table->boolean('pemeliharaan_selasar')->default(0);
            $table->boolean('pemeliharaan_uks')->default(0);
            $table->boolean('pemeliharaan_kantin')->default(0);
            $table->boolean('keamanan_guru')->default(0);
            $table->boolean('keamanan_kelas')->default(0);
            $table->boolean('keamanan_toilet')->default(0);
            $table->boolean('keamanan_selasar')->default(0);
            $table->boolean('keamanan_uks')->default(0);
            $table->boolean('keamanan_kantin')->default(0);
            $table->boolean('minum_guru')->default(0);
            $table->boolean('minum_kelas')->default(0);
            $table->boolean('minum_toilet')->default(0);
            $table->boolean('minum_selasar')->default(0);
            $table->boolean('minum_uks')->default(0);
            $table->boolean('minum_kantin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
}