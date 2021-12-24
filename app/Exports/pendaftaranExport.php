<?php

namespace App\Exports;

use App\Models\pendaftaran;

use Maatwebsite\Excel\Concerns\FromCollection;

class pendaftaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}
