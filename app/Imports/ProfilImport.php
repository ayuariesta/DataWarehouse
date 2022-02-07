<?php

namespace App\Imports;

use App\Models\Profil;
use App\Imports\ProfilUmumImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ProfilImport implements WithMultipleSheets
{

    public function sheets(): array
    {
        return [
            0 => new ProfilUmumImport(),
            3 => new RombelImport(),
            4 => new PrasaranaImport(),
            5 => new SaranaImport(),
            6 => new BlockgrantImport(),
            7 => new JadwalImport(),
        ];
    }
}