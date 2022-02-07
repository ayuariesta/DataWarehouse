<?php

namespace App\Imports;

use App\Models\Blockgrant;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BlockgrantImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        return new Blockgrant([
            'tahun' => $row[1],
            'jns_bantuan' => $row[2],
            'sumber_bantuan' => $row[3],
            'besar_bantuan' => $row[4],
            'dana_pendamping' => $row[5],
            'peruntukan_dana' => $row[6],
        ]);
    }

    public function startRow(): int
    {
        return 7;
    }
}