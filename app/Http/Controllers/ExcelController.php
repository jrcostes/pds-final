<?php

namespace App\Http\Controllers;
use App\Sheet;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Exports\SheetExport;
use Maatwebsite\Excel\Facades\Excel;

use Maatwebsite\Excel\Concerns\FromView;


class ExcelController extends Controller
{
    public function excel_form() {

        Excel::load('C:\xampp\htdocs\personaldatasheet2\resources\views\exportform\c3form.xlsx', function($excel){
            $excel->sheet('C3', function($sheet) {

                $sheet->cell('A6', function($cell) {
                    $cell->setValue($_GET['orgnameAddress1']);
                });

            });
        })->download('xlsx');
    }



}
