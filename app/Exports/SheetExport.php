<?php

namespace App\Exports;
use App\Sheet;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SheetExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Sheet::all();
    }
    public function headings(): array{

        return [
             "No.", "NameAdd", "DateFrom", "DateTo", "No.ofHours", "Position"
        ];

    }
}
