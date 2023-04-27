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
        Excel::load(env('EXCEL_PATH'), function($excel){
            $excel->sheet('C3DATA', function($sheet) {

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
                    $cell->setValue($_GET['orgnameSponsor10']);
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
    public function downloadExcel($id){
        $export = SheetExport::find($id);
        Excel::load('D:\xampp\htdocs\pds-final\resources\views\exportform\c2excel.xlsx', function($excel) use($export) {
            #return $exportdata;
            $excel->sheet('c2', function($sheet) {
                $sheet->cell('A5', function($cell) {

                    $cell->setValue('$exportdata->eligibility');
                });
            });
        })->download('xlsx');


    }

    public function excelprint(){
        Excel::load('D:\xampp\htdocs\pds-final\resources\views\exportform\c2excel.xlsx', function($excel){
            $excel->sheet('C2', function($sheet){
                $sheet->cell('A5', function($cell){
                    $cell->setValue($_GET['eligibility']);
                });
                $sheet->cell('F5', function($cell){
                    $cell->setValue($_GET['rating']);
                });
                $sheet->cell('G5', function($cell){
                    $cell->setValue($_GET['dateofexam']);
                });
                $sheet->cell('I5', function($cell){
                    $cell->setValue($_GET['placeofexam']);
                });
                $sheet->cell('L5', function($cell){
                    $cell->setValue($_GET['licenseno']);
                });
                $sheet->cell('M5', function($cell){
                    $cell->setValue($_GET['validity']);
                });
                $sheet->cell('A18', function($cell){
                    $cell->setValue($_GET['datefrom']);
                });
                $sheet->cell('C18', function($cell){
                    $cell->setValue($_GET['dateto']);
                });
                $sheet->cell('D18', function($cell){
                    $cell->setValue($_GET['position']);
                });
                $sheet->cell('G18', function($cell){
                    $cell->setValue($_GET['department']);
                });
                $sheet->cell('J18', function($cell){
                    $cell->setValue($_GET['salary']);
                });
                $sheet->cell('K18', function($cell){
                    $cell->setValue($_GET['paygrade']);
                });
                $sheet->cell('L18', function($cell){
                    $cell->setValue($_GET['appointment']);
                });
                $sheet->cell('M18', function($cell){
                    $cell->setValue($_GET['governmentserv']);
                });

                $sheet->cell('A6', function($cell){$cell->setValue($_GET['eligibility2']);});
                $sheet->cell('F6', function($cell){$cell->setValue($_GET['rating2']);});
                $sheet->cell('G6', function($cell){$cell->setValue($_GET['dateofexam2']);});
                $sheet->cell('I6', function($cell){$cell->setValue($_GET['placeofexam2']);});
                $sheet->cell('L6', function($cell){$cell->setValue($_GET['licenseno2']);});
                $sheet->cell('M6', function($cell){$cell->setValue($_GET['validity2']);});
                $sheet->cell('A7', function($cell){$cell->setValue($_GET['eligibility3']);});
                $sheet->cell('F7', function($cell){$cell->setValue($_GET['rating3']);});
                $sheet->cell('G7', function($cell){$cell->setValue($_GET['dateofexam3']);});
                $sheet->cell('I7', function($cell){$cell->setValue($_GET['placeofexam3']);});
                $sheet->cell('L7', function($cell){$cell->setValue($_GET['licenseno3']);});
                $sheet->cell('M7', function($cell){$cell->setValue($_GET['validity3']);});
                $sheet->cell('A8', function($cell){$cell->setValue($_GET['eligibility4']);});
                $sheet->cell('F8', function($cell){$cell->setValue($_GET['rating4']);});
                $sheet->cell('G8', function($cell){$cell->setValue($_GET['dateofexam4']);});
                $sheet->cell('I8', function($cell){$cell->setValue($_GET['placeofexam4']);});
                $sheet->cell('L8', function($cell){$cell->setValue($_GET['licenseno4']);});
                $sheet->cell('M8', function($cell){$cell->setValue($_GET['validity4']);});
                $sheet->cell('A9', function($cell){$cell->setValue($_GET['eligibility5']);});
                $sheet->cell('F9', function($cell){$cell->setValue($_GET['rating5']);});
                $sheet->cell('G9', function($cell){$cell->setValue($_GET['dateofexam5']);});
                $sheet->cell('I9', function($cell){$cell->setValue($_GET['placeofexam5']);});
                $sheet->cell('L9', function($cell){$cell->setValue($_GET['licenseno5']);});
                $sheet->cell('M9', function($cell){$cell->setValue($_GET['validity5']);});
                $sheet->cell('A10', function($cell){$cell->setValue($_GET['eligibility6']);});
                $sheet->cell('F10', function($cell){$cell->setValue($_GET['rating6']);});
                $sheet->cell('G10', function($cell){$cell->setValue($_GET['dateofexam6']);});
                $sheet->cell('I10', function($cell){$cell->setValue($_GET['placeofexam6']);});
                $sheet->cell('L10', function($cell){$cell->setValue($_GET['licenseno6']);});
                $sheet->cell('M10', function($cell){$cell->setValue($_GET['validity6']);});
                $sheet->cell('A11', function($cell){$cell->setValue($_GET['eligibility7']);});
                $sheet->cell('F11', function($cell){$cell->setValue($_GET['rating7']);});
                $sheet->cell('G11', function($cell){$cell->setValue($_GET['dateofexam7']);});
                $sheet->cell('I11', function($cell){$cell->setValue($_GET['placeofexam7']);});
                $sheet->cell('L11', function($cell){$cell->setValue($_GET['licenseno7']);});
                $sheet->cell('M11', function($cell){$cell->setValue($_GET['validity7']);});
                $sheet->cell('A19', function($cell){$cell->setValue($_GET['datefrom2']);});
                $sheet->cell('C19', function($cell){$cell->setValue($_GET['dateto2']);});
                $sheet->cell('D19', function($cell){$cell->setValue($_GET['position2']);});
                $sheet->cell('G19', function($cell){$cell->setValue($_GET['department2']);});
                $sheet->cell('J19', function($cell){$cell->setValue($_GET['salary2']);});
                $sheet->cell('K19', function($cell){$cell->setValue($_GET['paygrade2']);});
                $sheet->cell('L19', function($cell){$cell->setValue($_GET['appointment2']);});
                $sheet->cell('M19', function($cell){$cell->setValue($_GET['governmentserv2']);});
                $sheet->cell('A20', function($cell){$cell->setValue($_GET['datefrom3']);});
                $sheet->cell('C20', function($cell){$cell->setValue($_GET['dateto3']);});
                $sheet->cell('D20', function($cell){$cell->setValue($_GET['position3']);});
                $sheet->cell('G20', function($cell){$cell->setValue($_GET['department3']);});
                $sheet->cell('J20', function($cell){$cell->setValue($_GET['salary3']);});
                $sheet->cell('K20', function($cell){$cell->setValue($_GET['paygrade3']);});
                $sheet->cell('L20', function($cell){$cell->setValue($_GET['appointment3']);});
                $sheet->cell('M20', function($cell){$cell->setValue($_GET['governmentserv3']);});
                $sheet->cell('A21', function($cell){$cell->setValue($_GET['datefrom4']);});
                $sheet->cell('C21', function($cell){$cell->setValue($_GET['dateto4']);});
                $sheet->cell('D21', function($cell){$cell->setValue($_GET['position4']);});
                $sheet->cell('G21', function($cell){$cell->setValue($_GET['department4']);});
                $sheet->cell('J21', function($cell){$cell->setValue($_GET['salary4']);});
                $sheet->cell('K21', function($cell){$cell->setValue($_GET['paygrade4']);});
                $sheet->cell('L21', function($cell){$cell->setValue($_GET['appointment4']);});
                $sheet->cell('M21', function($cell){$cell->setValue($_GET['governmentserv4']);});
                $sheet->cell('A22', function($cell){$cell->setValue($_GET['datefrom5']);});
                $sheet->cell('C22', function($cell){$cell->setValue($_GET['dateto5']);});
                $sheet->cell('D22', function($cell){$cell->setValue($_GET['position5']);});
                $sheet->cell('G22', function($cell){$cell->setValue($_GET['department5']);});
                $sheet->cell('J22', function($cell){$cell->setValue($_GET['salary5']);});
                $sheet->cell('K22', function($cell){$cell->setValue($_GET['paygrade5']);});
                $sheet->cell('L22', function($cell){$cell->setValue($_GET['appointment5']);});
                $sheet->cell('M22', function($cell){$cell->setValue($_GET['governmentserv5']);});
                $sheet->cell('A23', function($cell){$cell->setValue($_GET['datefrom6']);});
                $sheet->cell('C23', function($cell){$cell->setValue($_GET['dateto6']);});
                $sheet->cell('D23', function($cell){$cell->setValue($_GET['position6']);});
                $sheet->cell('G23', function($cell){$cell->setValue($_GET['department6']);});
                $sheet->cell('J23', function($cell){$cell->setValue($_GET['salary6']);});
                $sheet->cell('K23', function($cell){$cell->setValue($_GET['paygrade6']);});
                $sheet->cell('L23', function($cell){$cell->setValue($_GET['appointment6']);});
                $sheet->cell('M23', function($cell){$cell->setValue($_GET['governmentserv6']);});
                $sheet->cell('A24', function($cell){$cell->setValue($_GET['datefrom7']);});
                $sheet->cell('C24', function($cell){$cell->setValue($_GET['dateto7']);});
                $sheet->cell('D24', function($cell){$cell->setValue($_GET['position7']);});
                $sheet->cell('G24', function($cell){$cell->setValue($_GET['department7']);});
                $sheet->cell('J24', function($cell){$cell->setValue($_GET['salary7']);});
                $sheet->cell('K24', function($cell){$cell->setValue($_GET['paygrade7']);});
                $sheet->cell('L24', function($cell){$cell->setValue($_GET['appointment7']);});
                $sheet->cell('M24', function($cell){$cell->setValue($_GET['governmentserv7']);});
                $sheet->cell('A25', function($cell){$cell->setValue($_GET['datefrom8']);});
                $sheet->cell('C25', function($cell){$cell->setValue($_GET['dateto8']);});
                $sheet->cell('D25', function($cell){$cell->setValue($_GET['position8']);});
                $sheet->cell('G25', function($cell){$cell->setValue($_GET['department8']);});
                $sheet->cell('J25', function($cell){$cell->setValue($_GET['salary8']);});
                $sheet->cell('K25', function($cell){$cell->setValue($_GET['paygrade8']);});
                $sheet->cell('L25', function($cell){$cell->setValue($_GET['appointment8']);});
                $sheet->cell('M25', function($cell){$cell->setValue($_GET['governmentserv8']);});
                $sheet->cell('A26', function($cell){$cell->setValue($_GET['datefrom9']);});
                $sheet->cell('C26', function($cell){$cell->setValue($_GET['dateto9']);});
                $sheet->cell('D26', function($cell){$cell->setValue($_GET['position9']);});
                $sheet->cell('G26', function($cell){$cell->setValue($_GET['department9']);});
                $sheet->cell('J26', function($cell){$cell->setValue($_GET['salary9']);});
                $sheet->cell('K26', function($cell){$cell->setValue($_GET['paygrade9']);});
                $sheet->cell('L26', function($cell){$cell->setValue($_GET['appointment9']);});
                $sheet->cell('M26', function($cell){$cell->setValue($_GET['governmentserv9']);});
                $sheet->cell('A27', function($cell){$cell->setValue($_GET['datefrom10']);});
                $sheet->cell('C27', function($cell){$cell->setValue($_GET['dateto10']);});
                $sheet->cell('D27', function($cell){$cell->setValue($_GET['position10']);});
                $sheet->cell('G27', function($cell){$cell->setValue($_GET['department10']);});
                $sheet->cell('J27', function($cell){$cell->setValue($_GET['salary10']);});
                $sheet->cell('K27', function($cell){$cell->setValue($_GET['paygrade10']);});
                $sheet->cell('L27', function($cell){$cell->setValue($_GET['appointment10']);});
                $sheet->cell('M27', function($cell){$cell->setValue($_GET['governmentserv10']);});
                $sheet->cell('A28', function($cell){$cell->setValue($_GET['datefrom11']);});
                $sheet->cell('C28', function($cell){$cell->setValue($_GET['dateto11']);});
                $sheet->cell('D28', function($cell){$cell->setValue($_GET['position11']);});
                $sheet->cell('G28', function($cell){$cell->setValue($_GET['department11']);});
                $sheet->cell('J28', function($cell){$cell->setValue($_GET['salary11']);});
                $sheet->cell('K28', function($cell){$cell->setValue($_GET['paygrade11']);});
                $sheet->cell('L28', function($cell){$cell->setValue($_GET['appointment11']);});
                $sheet->cell('M28', function($cell){$cell->setValue($_GET['governmentserv11']);});
                $sheet->cell('A29', function($cell){$cell->setValue($_GET['datefrom12']);});
                $sheet->cell('C29', function($cell){$cell->setValue($_GET['dateto12']);});
                $sheet->cell('D29', function($cell){$cell->setValue($_GET['position12']);});
                $sheet->cell('G29', function($cell){$cell->setValue($_GET['department12']);});
                $sheet->cell('J29', function($cell){$cell->setValue($_GET['salary12']);});
                $sheet->cell('K29', function($cell){$cell->setValue($_GET['paygrade12']);});
                $sheet->cell('L29', function($cell){$cell->setValue($_GET['appointment12']);});
                $sheet->cell('M29', function($cell){$cell->setValue($_GET['governmentserv12']);});
                $sheet->cell('A30', function($cell){$cell->setValue($_GET['datefrom13']);});
                $sheet->cell('C30', function($cell){$cell->setValue($_GET['dateto13']);});
                $sheet->cell('D30', function($cell){$cell->setValue($_GET['position13']);});
                $sheet->cell('G30', function($cell){$cell->setValue($_GET['department13']);});
                $sheet->cell('J30', function($cell){$cell->setValue($_GET['salary13']);});
                $sheet->cell('K30', function($cell){$cell->setValue($_GET['paygrade13']);});
                $sheet->cell('L30', function($cell){$cell->setValue($_GET['appointment13']);});
                $sheet->cell('M30', function($cell){$cell->setValue($_GET['governmentserv13']);});
                $sheet->cell('A31', function($cell){$cell->setValue($_GET['datefrom14']);});
                $sheet->cell('C31', function($cell){$cell->setValue($_GET['dateto14']);});
                $sheet->cell('D31', function($cell){$cell->setValue($_GET['position14']);});
                $sheet->cell('G31', function($cell){$cell->setValue($_GET['department14']);});
                $sheet->cell('J31', function($cell){$cell->setValue($_GET['salary14']);});
                $sheet->cell('K31', function($cell){$cell->setValue($_GET['paygrade14']);});
                $sheet->cell('L31', function($cell){$cell->setValue($_GET['appointment14']);});
                $sheet->cell('M31', function($cell){$cell->setValue($_GET['governmentserv14']);});
                $sheet->cell('A32', function($cell){$cell->setValue($_GET['datefrom15']);});
                $sheet->cell('C32', function($cell){$cell->setValue($_GET['dateto15']);});
                $sheet->cell('D32', function($cell){$cell->setValue($_GET['position15']);});
                $sheet->cell('G32', function($cell){$cell->setValue($_GET['department15']);});
                $sheet->cell('J32', function($cell){$cell->setValue($_GET['salary15']);});
                $sheet->cell('K32', function($cell){$cell->setValue($_GET['paygrade15']);});
                $sheet->cell('L32', function($cell){$cell->setValue($_GET['appointment15']);});
                $sheet->cell('M32', function($cell){$cell->setValue($_GET['governmentserv15']);});
                $sheet->cell('A33', function($cell){$cell->setValue($_GET['datefrom16']);});
                $sheet->cell('C33', function($cell){$cell->setValue($_GET['dateto16']);});
                $sheet->cell('D33', function($cell){$cell->setValue($_GET['position16']);});
                $sheet->cell('G33', function($cell){$cell->setValue($_GET['department16']);});
                $sheet->cell('J33', function($cell){$cell->setValue($_GET['salary16']);});
                $sheet->cell('K33', function($cell){$cell->setValue($_GET['paygrade16']);});
                $sheet->cell('L33', function($cell){$cell->setValue($_GET['appointment16']);});
                $sheet->cell('M33', function($cell){$cell->setValue($_GET['governmentserv16']);});
                $sheet->cell('A34', function($cell){$cell->setValue($_GET['datefrom17']);});
                $sheet->cell('C34', function($cell){$cell->setValue($_GET['dateto17']);});
                $sheet->cell('D34', function($cell){$cell->setValue($_GET['position17']);});
                $sheet->cell('G34', function($cell){$cell->setValue($_GET['department17']);});
                $sheet->cell('J34', function($cell){$cell->setValue($_GET['salary17']);});
                $sheet->cell('K34', function($cell){$cell->setValue($_GET['paygrade17']);});
                $sheet->cell('L34', function($cell){$cell->setValue($_GET['appointment17']);});
                $sheet->cell('M34', function($cell){$cell->setValue($_GET['governmentserv17']);});
                $sheet->cell('A35', function($cell){$cell->setValue($_GET['datefrom18']);});
                $sheet->cell('C35', function($cell){$cell->setValue($_GET['dateto18']);});
                $sheet->cell('D35', function($cell){$cell->setValue($_GET['position18']);});
                $sheet->cell('G35', function($cell){$cell->setValue($_GET['department18']);});
                $sheet->cell('J35', function($cell){$cell->setValue($_GET['salary18']);});
                $sheet->cell('K35', function($cell){$cell->setValue($_GET['paygrade18']);});
                $sheet->cell('L35', function($cell){$cell->setValue($_GET['appointment18']);});
                $sheet->cell('M35', function($cell){$cell->setValue($_GET['governmentserv18']);});
                $sheet->cell('A36', function($cell){$cell->setValue($_GET['datefrom19']);});
                $sheet->cell('C36', function($cell){$cell->setValue($_GET['dateto19']);});
                $sheet->cell('D36', function($cell){$cell->setValue($_GET['position19']);});
                $sheet->cell('G36', function($cell){$cell->setValue($_GET['department19']);});
                $sheet->cell('J36', function($cell){$cell->setValue($_GET['salary19']);});
                $sheet->cell('K36', function($cell){$cell->setValue($_GET['paygrade19']);});
                $sheet->cell('L36', function($cell){$cell->setValue($_GET['appointment19']);});
                $sheet->cell('M36', function($cell){$cell->setValue($_GET['governmentserv19']);});
                $sheet->cell('A37', function($cell){$cell->setValue($_GET['datefrom20']);});
                $sheet->cell('C37', function($cell){$cell->setValue($_GET['dateto20']);});
                $sheet->cell('D37', function($cell){$cell->setValue($_GET['position20']);});
                $sheet->cell('G37', function($cell){$cell->setValue($_GET['department20']);});
                $sheet->cell('J37', function($cell){$cell->setValue($_GET['salary20']);});
                $sheet->cell('K37', function($cell){$cell->setValue($_GET['paygrade20']);});
                $sheet->cell('L37', function($cell){$cell->setValue($_GET['appointment20']);});
                $sheet->cell('M37', function($cell){$cell->setValue($_GET['governmentserv20']);});
                $sheet->cell('A38', function($cell){$cell->setValue($_GET['datefrom21']);});
                $sheet->cell('C38', function($cell){$cell->setValue($_GET['dateto21']);});
                $sheet->cell('D38', function($cell){$cell->setValue($_GET['position21']);});
                $sheet->cell('G38', function($cell){$cell->setValue($_GET['department21']);});
                $sheet->cell('J38', function($cell){$cell->setValue($_GET['salary21']);});
                $sheet->cell('K38', function($cell){$cell->setValue($_GET['paygrade21']);});
                $sheet->cell('L38', function($cell){$cell->setValue($_GET['appointment21']);});
                $sheet->cell('M38', function($cell){$cell->setValue($_GET['governmentserv21']);});
                $sheet->cell('A39', function($cell){$cell->setValue($_GET['datefrom22']);});
                $sheet->cell('C39', function($cell){$cell->setValue($_GET['dateto22']);});
                $sheet->cell('D39', function($cell){$cell->setValue($_GET['position22']);});
                $sheet->cell('G39', function($cell){$cell->setValue($_GET['department22']);});
                $sheet->cell('J39', function($cell){$cell->setValue($_GET['salary22']);});
                $sheet->cell('K39', function($cell){$cell->setValue($_GET['paygrade22']);});
                $sheet->cell('L39', function($cell){$cell->setValue($_GET['appointment22']);});
                $sheet->cell('M39', function($cell){$cell->setValue($_GET['governmentserv22']);});
                $sheet->cell('A40', function($cell){$cell->setValue($_GET['datefrom23']);});
                $sheet->cell('C40', function($cell){$cell->setValue($_GET['dateto23']);});
                $sheet->cell('D40', function($cell){$cell->setValue($_GET['position23']);});
                $sheet->cell('G40', function($cell){$cell->setValue($_GET['department23']);});
                $sheet->cell('J40', function($cell){$cell->setValue($_GET['salary23']);});
                $sheet->cell('K40', function($cell){$cell->setValue($_GET['paygrade23']);});
                $sheet->cell('L40', function($cell){$cell->setValue($_GET['appointment23']);});
                $sheet->cell('M40', function($cell){$cell->setValue($_GET['governmentserv23']);});
                $sheet->cell('A41', function($cell){$cell->setValue($_GET['datefrom24']);});
                $sheet->cell('C41', function($cell){$cell->setValue($_GET['dateto24']);});
                $sheet->cell('D41', function($cell){$cell->setValue($_GET['position24']);});
                $sheet->cell('G41', function($cell){$cell->setValue($_GET['department24']);});
                $sheet->cell('J41', function($cell){$cell->setValue($_GET['salary24']);});
                $sheet->cell('K41', function($cell){$cell->setValue($_GET['paygrade24']);});
                $sheet->cell('L41', function($cell){$cell->setValue($_GET['appointment24']);});
                $sheet->cell('M41', function($cell){$cell->setValue($_GET['governmentserv24']);});
                $sheet->cell('A42', function($cell){$cell->setValue($_GET['datefrom25']);});
                $sheet->cell('C42', function($cell){$cell->setValue($_GET['dateto25']);});
                $sheet->cell('D42', function($cell){$cell->setValue($_GET['position25']);});
                $sheet->cell('G42', function($cell){$cell->setValue($_GET['department25']);});
                $sheet->cell('J42', function($cell){$cell->setValue($_GET['salary25']);});
                $sheet->cell('K42', function($cell){$cell->setValue($_GET['paygrade25']);});
                $sheet->cell('L42', function($cell){$cell->setValue($_GET['appointment25']);});
                $sheet->cell('M42', function($cell){$cell->setValue($_GET['governmentserv25']);});
                $sheet->cell('A43', function($cell){$cell->setValue($_GET['datefrom26']);});
                $sheet->cell('C43', function($cell){$cell->setValue($_GET['dateto26']);});
                $sheet->cell('D43', function($cell){$cell->setValue($_GET['position26']);});
                $sheet->cell('G43', function($cell){$cell->setValue($_GET['department26']);});
                $sheet->cell('J43', function($cell){$cell->setValue($_GET['salary26']);});
                $sheet->cell('K43', function($cell){$cell->setValue($_GET['paygrade26']);});
                $sheet->cell('L43', function($cell){$cell->setValue($_GET['appointment26']);});
                $sheet->cell('M43', function($cell){$cell->setValue($_GET['governmentserv26']);});
                $sheet->cell('A44', function($cell){$cell->setValue($_GET['datefrom27']);});
                $sheet->cell('C44', function($cell){$cell->setValue($_GET['dateto27']);});
                $sheet->cell('D44', function($cell){$cell->setValue($_GET['position27']);});
                $sheet->cell('G44', function($cell){$cell->setValue($_GET['department27']);});
                $sheet->cell('J44', function($cell){$cell->setValue($_GET['salary27']);});
                $sheet->cell('K44', function($cell){$cell->setValue($_GET['paygrade27']);});
                $sheet->cell('L44', function($cell){$cell->setValue($_GET['appointment27']);});
                $sheet->cell('M44', function($cell){$cell->setValue($_GET['governmentserv27']);});
                $sheet->cell('A45', function($cell){$cell->setValue($_GET['datefrom28']);});
                $sheet->cell('C45', function($cell){$cell->setValue($_GET['dateto28']);});
                $sheet->cell('D45', function($cell){$cell->setValue($_GET['position28']);});
                $sheet->cell('G45', function($cell){$cell->setValue($_GET['department28']);});
                $sheet->cell('J45', function($cell){$cell->setValue($_GET['salary28']);});
                $sheet->cell('K45', function($cell){$cell->setValue($_GET['paygrade28']);});
                $sheet->cell('L45', function($cell){$cell->setValue($_GET['appointment28']);});
                $sheet->cell('M45', function($cell){$cell->setValue($_GET['governmentserv28']);});

            });
            activity()->log('Excel Form Downloaded');
        })->download('xlsx');

    }




}
