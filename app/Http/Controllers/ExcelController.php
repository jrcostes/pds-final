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
                $sheet->cell('A9', function($cell) {
                    $cell->setValue($_GET['orgnameAddress4']);
                });
                $sheet->cell('E9', function($cell) {
                    $cell->setValue($_GET['orgdateFrom4']);
                });
                $sheet->cell('F9', function($cell) {
                    $cell->setValue($_GET['orgdateTo4']);
                });
                $sheet->cell('G9', function($cell) {
                    $cell->setValue($_GET['orgnumHours4']);
                });
                $sheet->cell('H9', function($cell) {
                    $cell->setValue($_GET['orgPosition4']);
                });

                $sheet->cell('A10', function($cell) {
                    $cell->setValue($_GET['orgnameAddress5']);
                });
                $sheet->cell('E10', function($cell) {
                    $cell->setValue($_GET['orgdateFrom5']);
                });
                $sheet->cell('F10', function($cell) {
                    $cell->setValue($_GET['orgdateTo5']);
                });
                $sheet->cell('G10', function($cell) {
                    $cell->setValue($_GET['orgnumHours5']);
                });
                $sheet->cell('H10', function($cell) {
                    $cell->setValue($_GET['orgPosition5']);
                });

                $sheet->cell('A11', function($cell) {
                    $cell->setValue($_GET['orgnameAddress6']);
                });
                $sheet->cell('E11', function($cell) {
                    $cell->setValue($_GET['orgdateFrom6']);
                });
                $sheet->cell('F11', function($cell) {
                    $cell->setValue($_GET['orgdateTo6']);
                });
                $sheet->cell('G11', function($cell) {
                    $cell->setValue($_GET['orgnumHours6']);
                });
                $sheet->cell('H11', function($cell) {
                    $cell->setValue($_GET['orgPosition6']);
                });

                $sheet->cell('A12', function($cell) {
                    $cell->setValue($_GET['orgnameAddress7']);
                });
                $sheet->cell('E12', function($cell) {
                    $cell->setValue($_GET['orgdateFrom7']);
                });
                $sheet->cell('F12', function($cell) {
                    $cell->setValue($_GET['orgdateTo7']);
                });
                $sheet->cell('G12', function($cell) {
                    $cell->setValue($_GET['orgnumHours7']);
                });
                $sheet->cell('H12', function($cell) {
                    $cell->setValue($_GET['orgPosition7']);
                });

                //VII. Learning and Development Interventions
                $sheet->cell('A19', function($cell) {
                    $cell->setValue($_GET['orgnameAddress8']);
                });
                $sheet->cell('E19', function($cell) {
                    $cell->setValue($_GET['orgdateFrom8']);
                });
                $sheet->cell('F19', function($cell) {
                    $cell->setValue($_GET['orgdateTo8']);
                });
                $sheet->cell('G19', function($cell) {
                    $cell->setValue($_GET['orgnumHours8']);
                });
                $sheet->cell('H19', function($cell) {
                    $cell->setValue($_GET['orgType8']);
                });
                $sheet->cell('I19', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor8']);
                });

                $sheet->cell('A20', function($cell) {
                    $cell->setValue($_GET['orgnameAddress9']);
                });
                $sheet->cell('E20', function($cell) {
                    $cell->setValue($_GET['orgdateFrom9']);
                });
                $sheet->cell('F20', function($cell) {
                    $cell->setValue($_GET['orgdateTo9']);
                });
                $sheet->cell('G20', function($cell) {
                    $cell->setValue($_GET['orgnumHours9']);
                });
                $sheet->cell('H20', function($cell) {
                    $cell->setValue($_GET['orgType9']);
                });
                $sheet->cell('I20', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor9']);
                });

                $sheet->cell('A21', function($cell) {
                    $cell->setValue($_GET['orgnameAddress10']);
                });
                $sheet->cell('E21', function($cell) {
                    $cell->setValue($_GET['orgdateFrom10']);
                });
                $sheet->cell('F21', function($cell) {
                    $cell->setValue($_GET['orgdateTo10']);
                });
                $sheet->cell('G21', function($cell) {
                    $cell->setValue($_GET['orgnumHours10']);
                });
                $sheet->cell('H21', function($cell) {
                    $cell->setValue($_GET['orgType10']);
                });
                $sheet->cell('I21', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor11']);
                });

                $sheet->cell('A22', function($cell) {
                    $cell->setValue($_GET['orgnameAddress11']);
                });
                $sheet->cell('E22', function($cell) {
                    $cell->setValue($_GET['orgdateFrom11']);
                });
                $sheet->cell('F22', function($cell) {
                    $cell->setValue($_GET['orgdateTo11']);
                });
                $sheet->cell('G22', function($cell) {
                    $cell->setValue($_GET['orgnumHours11']);
                });
                $sheet->cell('H22', function($cell) {
                    $cell->setValue($_GET['orgType11']);
                });
                $sheet->cell('I22', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor11']);
                });

                $sheet->cell('A23', function($cell) {
                    $cell->setValue($_GET['orgnameAddress12']);
                });
                $sheet->cell('E23', function($cell) {
                    $cell->setValue($_GET['orgdateFrom12']);
                });
                $sheet->cell('F23', function($cell) {
                    $cell->setValue($_GET['orgdateTo12']);
                });
                $sheet->cell('G23', function($cell) {
                    $cell->setValue($_GET['orgnumHours12']);
                });
                $sheet->cell('H23', function($cell) {
                    $cell->setValue($_GET['orgType12']);
                });
                $sheet->cell('I23', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor12']);
                });

                $sheet->cell('A24', function($cell) {
                    $cell->setValue($_GET['orgnameAddress13']);
                });
                $sheet->cell('E24', function($cell) {
                    $cell->setValue($_GET['orgdateFrom13']);
                });
                $sheet->cell('F24', function($cell) {
                    $cell->setValue($_GET['orgdateTo13']);
                });
                $sheet->cell('G24', function($cell) {
                    $cell->setValue($_GET['orgnumHours13']);
                });
                $sheet->cell('H24', function($cell) {
                    $cell->setValue($_GET['orgType13']);
                });
                $sheet->cell('I24', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor13']);
                });

                $sheet->cell('A25', function($cell) {
                    $cell->setValue($_GET['orgnameAddress14']);
                });
                $sheet->cell('E25', function($cell) {
                    $cell->setValue($_GET['orgdateFrom14']);
                });
                $sheet->cell('F25', function($cell) {
                    $cell->setValue($_GET['orgdateTo14']);
                });
                $sheet->cell('G25', function($cell) {
                    $cell->setValue($_GET['orgnumHours14']);
                });
                $sheet->cell('H25', function($cell) {
                    $cell->setValue($_GET['orgType14']);
                });
                $sheet->cell('I25', function($cell) {
                    $cell->setValue($_GET['orgnameSponsor14']);
                });

                //VIII. Other Information
                $sheet->cell('A43', function($cell) {
                    $cell->setValue($_GET['orgnameSkill1']);
                });
                $sheet->cell('C43', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct1']);
                });
                $sheet->cell('I43', function($cell) {
                    $cell->setValue($_GET['orgnameMembership1']);
                });

                $sheet->cell('A44', function($cell) {
                    $cell->setValue($_GET['orgnameSkill2']);
                });
                $sheet->cell('C44', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct2']);
                });
                $sheet->cell('I44', function($cell) {
                    $cell->setValue($_GET['orgnameMembership2']);
                });

                $sheet->cell('A45', function($cell) {
                    $cell->setValue($_GET['orgnameSkill3']);
                });
                $sheet->cell('C45', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct3']);
                });
                $sheet->cell('I45', function($cell) {
                    $cell->setValue($_GET['orgnameMembership3']);
                });

                $sheet->cell('A46', function($cell) {
                    $cell->setValue($_GET['orgnameSkill4']);
                });
                $sheet->cell('C46', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct4']);
                });
                $sheet->cell('I46', function($cell) {
                    $cell->setValue($_GET['orgnameMembership4']);
                });

                $sheet->cell('A47', function($cell) {
                    $cell->setValue($_GET['orgnameSkill5']);
                });
                $sheet->cell('C47', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct5']);
                });
                $sheet->cell('I47', function($cell) {
                    $cell->setValue($_GET['orgnameMembership5']);
                });

                $sheet->cell('A48', function($cell) {
                    $cell->setValue($_GET['orgnameSkill6']);
                });
                $sheet->cell('C48', function($cell) {
                    $cell->setValue($_GET['orgnameDistinct6']);
                });
                $sheet->cell('I48', function($cell) {
                    $cell->setValue($_GET['orgnameMembership6']);
                });
            });
        })->download('xlsx');
    }



}
