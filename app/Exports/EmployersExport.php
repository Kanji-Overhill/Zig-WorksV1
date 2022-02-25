<?php

namespace App\Exports;

use App\Models\Employers;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employers::all();
    }
}
