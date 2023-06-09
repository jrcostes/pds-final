<?php

namespace App\Exports;
use App\Sheet;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;


class SheetExport implements FromView
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
