<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    public $table = "guru";
    public $timestamps = false;
    protected $fillable = [
        'nama_gr',
        'nuptk',
        'jk',
        'tmp_lhr',
        'tgl_lhr',
        'nip',
        'status_kep',
        'jenis_ptk',
        'agama',
        'almt_jln',
        'rt',
        'rw',
        'nm_dusun',
        'desa_kelurahan',
        'kecamatan',
        'kd_pos',
        'telp',
        'hp',
        'email',
        'tgs_tambahan',
        'sk_cpns',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'lmbg_pengangkatan',
        'pangkat_gol',
        'sumber_gaji',
        'nm_ibu',
        'status_perkawinan',
        'nm_suami_istri',
        'nip_suami_istri',
        'pekerjaan_suami_istri',
        'tmt_pns',
        'lisensi',
        'diklat_kep',
        'keahlian_braille',
        'keahlian_bhs_isyarat',
        'npwp',
        'nm_wjb_pajak',
        'kewarganegaraan',
        'bank',
        'nmr_rek_bank',
        'rek_nama',
        'nik_gr',
        'no_kk',
        'karpeg',
        'karis_karsu',
        'lintang',
        'bujur',
        'nuks'
    ];
}
