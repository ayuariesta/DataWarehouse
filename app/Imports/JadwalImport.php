<?php

namespace App\Imports;
use App\Models\Jadwal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class JadwalImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        return new Prasarana([
            'ruang' => $row[1],
            'pembelajaran_jamke' => $row[2],
            'senin' => $row[3],
            'selasa' => $row[4],
            'rabu' => $row[5],
            'kamis' => $row[6],
            'jumat' => $row[7],
            'sabtu' => $row[8],
            'minggu' => $row[8],
        ]);
    }

    public function startRow(): int
    {
        return 8;
    }
}