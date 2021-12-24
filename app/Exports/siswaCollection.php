<?php

namespace App\Exports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class siswaCollection implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return siswa::all();
    }
}
