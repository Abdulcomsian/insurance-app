<?php

namespace App\Exports;

use App\Models\CompanyDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyDetailExportMapping implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CompanyDetail::with('board_of_directors')->get();
    }
}
