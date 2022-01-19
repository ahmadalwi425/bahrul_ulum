<?php

namespace App\Exports;

use App\Models\data_ortu;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class siswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return data_ortu::with('siswa')->get();
    }
    public function headings(): array
    {
        return [
            'id',
        ];
    }
}
