<?php

namespace App\Imports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PDImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PesertaDidik([
            'nama_pd' => $row[1],
            'nipd' => $row[2],
            'jenis_kelamin' => $row[3],
            'nisn' => $row[4],
            'tmp_lhr' => $row[5],
            'tgl_lhr' => $row[6],
            'nik_pd' => $row[7],
            'agama' => $row[8],
            'alamat' => $row[9],
            'rt' => $row[10],
            'rw' => $row[11],
            'dusun' => $row[12],
            'kelurahan' => $row[13],
            'kecamatan' => $row[14],
            'kode_pos' => $row[15],
            'jenis_tinggal' => $row[16],
            'transportasi' => $row[17],
            'no_telp' => $row[18],
            'no_hp' => $row[19],
            'email' => $row[20],
            'skhun' => $row[21],
            'penerima_kps' => $row[22],
            'no_kps' => $row[23],
            'nama_ayah' => $row[24],
            'thn_lhr_ayah' => $row[25],
            'pend_ayah' => $row[26],
            'pekerjaan_ayah' => $row[27],
            'penghasilan_ayah' => $row[28],
            'nik_ayah' => $row[29],
            'nama_ibu' => $row[30],
            'thn_lhr_ibu' => $row[31],
            'pend_ibu' => $row[32],
            'pekerjaan_ibu' => $row[33],
            'penghasilan_ibu' => $row[34],
            'nik_ibu' => $row[35],
            'nama_wali' => $row[36],
            'thn_lhr_wali' => $row[37],
            'pend_wali' => $row[38],
            'pekerjaan_wali' => $row[39],
            'penghasilan_wali' => $row[40],
            'nik_wali' => $row[41],
            'tingkat_rombel' => $row[42],
            'no_peserta_un' => $row[43],
            'no_seri_ijazah' => $row[44],
            'penerima_kip' => $row[45],
            'nomor_kip' => $row[46],
            'nama_kip' => $row[47],
            'no_kks' => $row[48],
            'no_regis_akta' => $row[49],
            'bank' => $row[50],
            'no_rek_bank' => $row[51],
            'rekening_atas_nama' => $row[52],
            'layak_pip' => $row[53],
            'alasan_pip' => $row[54],
            'keb_khusus' => $row[55],
            'sekolah_asal' => $row[56],
            'anak_ke' => $row[57],
            'lintang' => $row[58],
            'bujur' => $row[59],
            'no_kk' => $row[60],
            'berat_badan' => $row[61],
            'tinggi_badan' => $row[62],
            'lingkar_kepala' => $row[63],
            'jml_saudara' => $row[64],
            'jarak_ke_sekolah' => $row[65],
        ]);
    }

    public function startRow(): int
    {
        return 7;
    }
}