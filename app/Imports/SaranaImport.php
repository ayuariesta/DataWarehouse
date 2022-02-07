<?php

namespace App\Imports;

use App\Models\Sarana;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SaranaImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        return new Sarana([
            'jenis_sarana' => $row[1],
            'letak' => $row[2],
            'kepemilikan' => $row[3],
            'spesifikasi' => $row[4],
            'jumlah' => $row[5],
            'laik' => $row[6],
            'tidak laik' => $row[7],
        ]);
    }

    public function startRow(): int
    {
        return 7;
    }
}