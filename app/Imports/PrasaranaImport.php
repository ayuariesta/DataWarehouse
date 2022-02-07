<?php

namespace App\Imports;
use App\Models\Prasarana;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PrasaranaImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        return new Prasarana([
            'nama_pras' => $row[1],
            'ket' => $row[2],
            'panjang' => $row[3],
            'lebar' => $row[4],
            'konkerusakan_pondasi' => $row[5],
            'konkerusakan_skb' => $row[6],
            'konkerusakan_plesterstruktur' => $row[7],
            'konkerusakan_kudakuda' => $row[8],
            'konkerusakan_kasoatap' => $row[9],
            'konkerusakan_reng' => $row[10],
            'konkerusakan_penutupatap' => $row[11],
            'konkerusakan_rangkaplafon' => $row[12],
            'konkerusakan_tutupplafon' => $row[13],
            'konkerusakan_batadinding' => $row[14],
            'konkerusakan_plesterdinding' => $row[15],
            'konkerusakan_daunpintu' => $row[16],
            'konkerusakan_kusen' => $row[17],
            'konkerusakan_tutuplantai' => $row[18],
            'konkerusakan_inslistrik' => $row[19],
            'konkerusakan_insair' => $row[20],
            'konkerusakan_drainase' => $row[21],
            'konkerusakan_finplafon' => $row[22],
            'konkerusakan_findinding' => $row[23],
            'konkerusakan_finkusen' => $row[24],
            'konkerusakan_presentasekerusakan' => $row[25],
            'status_kep' => $row[26],
        ]);
    }

    public function startRow(): int
    {
        return 8;
    }
}