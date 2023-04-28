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
use App\C1answers   ;
use Maatwebsite\Excel\Facades\Excel;



class ExcelController extends Controller
{

    public function excel_form() {


        Excel::load('C:\xampp\htdocs\pds-final\resources\views\exportform\pdsform-1sheet_fixed.xlsx', function($excel){
            $excel->sheet('Sheet1', function($sheet) {


            });

        })->download('xls');

    }





}
