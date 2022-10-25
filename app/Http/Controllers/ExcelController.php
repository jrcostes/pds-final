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

                //VI. Voluntary Work or Involvement Section
                $sheet->cell('A6', function($cell) {
                    $cell->setValue($_GET['orgnameAddress1']);
                });

                $sheet->cell('E6', function($cell) {
                    $cell->setValue($_GET['orgdateFrom1']);
                });

                $sheet->cell('F6', function($cell) {
                    $cell->setValue($_GET['orgdateTo1']);
                });

                $sheet->cell('G6', function($cell) {
                    $cell->setValue($_GET['orgnumHours1']);
                });

                $sheet->cell('H6', function($cell) {
                    $cell->setValue($_GET['orgPosition1']);
                });

                $sheet->cell('A7', function($cell) {
                    $cell->setValue($_GET['orgnameAddress2']);
                });

                $sheet->cell('E7', function($cell) {
                    $cell->setValue($_GET['orgdateFrom2']);
                });

                $sheet->cell('F7', function($cell) {
                    $cell->setValue($_GET['orgdateTo2']);
                });

                $sheet->cell('G7', function($cell) {
                    $cell->setValue($_GET['orgnumHours2']);
                });

                $sheet->cell('H7', function($cell) {
                    $cell->setValue($_GET['orgPosition2']);
                });

                $sheet->cell('A8', function($cell) {
                    $cell->setValue($_GET['orgnameAddress3']);
                });

                $sheet->cell('E8', function($cell) {
                    $cell->setValue($_GET['orgdateFrom3']);
                });

                $sheet->cell('F8', function($cell) {
                    $cell->setValue($_GET['orgdateTo3']);
                });

                $sheet->cell('G8', function($cell) {
                    $cell->setValue($_GET['orgnumHours3']);
                });

                $sheet->cell('H8', function($cell) {
                    $cell->setValue($_GET['orgPosition3']);
                });


            });
        })->download('xlsx');
    }



}
