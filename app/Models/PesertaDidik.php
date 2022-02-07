<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;
    public $table = "peserta_didik";
    public $timestamps = false;
    protected $fillable = [
        'nama_pd',
        'nipd',
        'jenis_kelamin',
        'nisn',
        'tmp_lhr',
        'tgl_lhr',
        'nik_pd',
        'agama',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'jenis_tinggal',
        'transportasi',
        'no_telp',
        'no_hp',
        'email',
        'skhun',
        'penerima_kps',
        'no_kps',
        'nama_ayah',
        'thn_lhr_ayah',
        'pend_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nik_ayah',
        'nama_ibu',
        'thn_lhr_ibu',
        'pend_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nik_ibu',
        'nama_wali',
        'thn_lhr_wali',
        'pend_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'nik_wali',
        'tingkat_rombel',
        'no_peserta_un',
        'no_seri_ijazah',
        'penerima_kip',
        'nomor_kip',
        'nama_kip',
        'no_kks',
        'no_regis_akta',
        'bank',
        'no_rek_bank',
        'rekening_atas_nama',
        'layak_pip',
        'alasan_pip',
        'keb_khusus',
        'sekolah_asal',
        'anak_ke',
        'lintang',
        'bujur',
        'no_kk',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'jml_saudara',
        'jarak_ke_sekolah'
    ];
}
