<?php

namespace App\Exports;

use App\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendaftaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pendaftaran::all();
    }
}
