<?php

namespace App\Imports;
use App\Models\Rombel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class RombelImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        return new Rombel([
            'nama_rombel' => $row[1],
            'tingkat_kelas' => $row[2],
            'jum_L' => $row[3],
            'jum_P' => $row[4],
            'jum_total' => $row[5],
            'wali_kls' => $row[6],
            'kurikulum' => $row[7],
            'ruangan' => $row[8],
        ]);
    }

    public function startRow(): int
    {
        return 8;
    }
}