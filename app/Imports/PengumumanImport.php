<?php

namespace App\Imports;

use App\Models\Pengumuman;
// use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PengumumanImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new Pengumuman([
            'nama' => $row['nama'],
            'note' => $row['note']
        ]);
    }
}
