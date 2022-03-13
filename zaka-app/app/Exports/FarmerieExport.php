<?php

namespace App\Exports;

use App\Models\Farmerie;
use Maatwebsite\Excel\Concerns\FromCollection;

class FarmerieExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Farmerie::all();
        
    }
}
