<?php

namespace App\Imports;

use App\Models\Tendik;
use Maatwebsite\Excel\Concerns\ToModel;

class TendikImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tendik([
            //
        ]);
    }
}