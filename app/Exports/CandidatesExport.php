<?php

namespace App\Exports;

use App\Models\Candidates;
use Maatwebsite\Excel\Concerns\FromCollection;

class CandidatesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Candidates::all();
    }
}
