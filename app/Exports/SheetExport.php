<?php

namespace App\Exports;
use App\Sheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class SheetExport implements FromView, WithMultipleSheets
{

    public function view(): View
    {
        {
            return view('print_forms.c3file', [
                'exportform'=> Sheet::all()
            ]);
        }
    }

    /*public function headings(): array{

        return [
             "No.", "NameAdd", "DateFrom", "DateTo", "No.ofHours", "Position"
        ];

    }*/
}
