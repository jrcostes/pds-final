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




class PostController extends Controller
{
    public function index()
    {
        // $products = Sheet::latest()->paginate(5);
        $products = Sheet::latest()->paginate(5);
        return view('c3data.homepage', compact('products'));
    }

    /*public function export()
    {
        return Excel::download(new SheetExport, 'users.xlsx');
    }*/

    public function form_submit(Request $request)
    {
        $request->all();

        Sheet::create($request->all());

        return redirect()->back()->with('message', 'Submitted!');
            // ->with('success','Entry Saved');
    }


    public function show($id){
        $sheets = Sheet::find($id);
        $datacompact = $sheets;
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf = PDF::loadView('c3forms.c3form', $datacompact)->setOption('page-width', '215.9')->setOption('page-height','355.6');

            return $pdf->download('c3form.pdf');
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function print_form(Request $request){

            $orgnameAddress1 = $_GET['orgnameAddress1'];
            $orgdateFrom1 = $_GET['orgdateFrom1'];
            $orgdateTo1 = $_GET['orgdateTo1'];
            $orgnumHours1 = $_GET['orgnumHours1'];
            $orgPosition1 = $_GET['orgPosition1'];

            $orgnameAddress2 = $_GET['orgnameAddress2'];
            $orgdateFrom2 = $_GET['orgdateFrom2'];
            $orgdateTo2 = $_GET['orgdateTo2'];
            $orgnumHours2 = $_GET['orgnumHours2'];
            $orgPosition2 = $_GET['orgPosition2'];

            $orgnameAddress3 = $_GET['orgnameAddress3'];
            $orgdateFrom3 = $_GET['orgdateFrom3'];
            $orgdateTo3 = $_GET['orgdateTo3'];
            $orgnumHours3 = $_GET['orgnumHours3'];
            $orgPosition3 = $_GET['orgPosition3'];

            $orgnameAddress4 = $_GET['orgnameAddress4'];
            $orgdateFrom4 = $_GET['orgdateFrom4'];
            $orgdateTo4 = $_GET['orgdateTo4'];
            $orgnumHours4 = $_GET['orgnumHours4'];
            $orgPosition4 = $_GET['orgPosition4'];

            $orgnameAddress5 = $_GET['orgnameAddress5'];
            $orgdateFrom5 = $_GET['orgdateFrom5'];
            $orgdateTo5 = $_GET['orgdateTo5'];
            $orgnumHours5 = $_GET['orgnumHours5'];
            $orgPosition5 = $_GET['orgPosition5'];

            $orgnameAddress6 = $_GET['orgnameAddress6'];
            $orgdateFrom6 = $_GET['orgdateFrom6'];
            $orgdateTo6 = $_GET['orgdateTo6'];
            $orgnumHours6 = $_GET['orgnumHours6'];
            $orgPosition6 = $_GET['orgPosition6'];

            $orgnameAddress7 = $_GET['orgnameAddress7'];
            $orgdateFrom7 = $_GET['orgdateFrom7'];
            $orgdateTo7 = $_GET['orgdateTo7'];
            $orgnumHours7 = $_GET['orgnumHours7'];
            $orgPosition7 = $_GET['orgPosition7'];

            $orgnameAddress8 = $_GET['orgnameAddress8'];
            $orgdateFrom8 = $_GET['orgdateFrom8'];
            $orgdateTo8 = $_GET['orgdateTo8'];
            $orgnumHours8 = $_GET['orgnumHours8'];
            $orgType8 = $_GET['orgType8'];
            $orgnameSponsor8 = $_GET['orgnameSponsor8'];

            $orgnameAddress9 = $_GET['orgnameAddress9'];
            $orgdateFrom9 = $_GET['orgdateFrom9'];
            $orgdateTo9 = $_GET['orgdateTo9'];
            $orgnumHours9 = $_GET['orgnumHours9'];
            $orgType9 = $_GET['orgType9'];
            $orgnameSponsor9 = $_GET['orgnameSponsor9'];

            $orgnameAddress10 = $_GET['orgnameAddress10'];
            $orgdateFrom10 = $_GET['orgdateFrom10'];
            $orgdateTo10 = $_GET['orgdateTo10'];
            $orgnumHours10 = $_GET['orgnumHours10'];
            $orgType10 = $_GET['orgType10'];
            $orgnameSponsor10 = $_GET['orgnameSponsor10'];

            $orgnameAddress11 = $_GET['orgnameAddress11'];
            $orgdateFrom11 = $_GET['orgdateFrom11'];
            $orgdateTo11 = $_GET['orgdateTo11'];
            $orgnumHours11 = $_GET['orgnumHours11'];
            $orgType11 = $_GET['orgType11'];
            $orgnameSponsor11 = $_GET['orgnameSponsor11'];

            $orgnameAddress12 = $_GET['orgnameAddress12'];
            $orgdateFrom12 = $_GET['orgdateFrom12'];
            $orgdateTo12 = $_GET['orgdateTo12'];
            $orgnumHours12 = $_GET['orgnumHours12'];
            $orgType12 = $_GET['orgType12'];
            $orgnameSponsor12 = $_GET['orgnameSponsor12'];

            $orgnameAddress13 = $_GET['orgnameAddress13'];
            $orgdateFrom13 = $_GET['orgdateFrom13'];
            $orgdateTo13 = $_GET['orgdateTo13'];
            $orgnumHours13 = $_GET['orgnumHours13'];
            $orgType13 = $_GET['orgType13'];
            $orgnameSponsor13 = $_GET['orgnameSponsor13'];

            $orgnameAddress14 = $_GET['orgnameAddress14'];
            $orgdateFrom14 = $_GET['orgdateFrom14'];
            $orgdateTo14 = $_GET['orgdateTo14'];
            $orgnumHours14 = $_GET['orgnumHours14'];
            $orgType14 = $_GET['orgType14'];
            $orgnameSponsor14 = $_GET['orgnameSponsor14'];

            $orgnameSkill1 = $_GET['orgnameSkill1'];
            $orgnameDistinct1 = $_GET['orgnameDistinct1'];
            $orgnameMembership1 = $_GET['orgnameMembership1'];

            $orgnameSkill2 = $_GET['orgnameSkill2'];
            $orgnameDistinct2 = $_GET['orgnameDistinct2'];
            $orgnameMembership2 = $_GET['orgnameMembership2'];

            $orgnameSkill3 = $_GET['orgnameSkill3'];
            $orgnameDistinct3 = $_GET['orgnameDistinct3'];
            $orgnameMembership3 = $_GET['orgnameMembership3'];

            $orgnameSkill4 = $_GET['orgnameSkill4'];
            $orgnameDistinct4 = $_GET['orgnameDistinct4'];
            $orgnameMembership4 = $_GET['orgnameMembership4'];

            $orgnameSkill5 = $_GET['orgnameSkill5'];
            $orgnameDistinct5 = $_GET['orgnameDistinct5'];
            $orgnameMembership5 = $_GET['orgnameMembership5'];

            $orgnameSkill6 = $_GET['orgnameSkill6'];
            $orgnameDistinct6 = $_GET['orgnameDistinct6'];
            $orgnameMembership6 = $_GET['orgnameMembership6'];
            // $form_radio = $request->input('form_radio');
            $datacompact = compact('orgnameAddress1', 'orgdateFrom1', 'orgdateTo1','orgnumHours1','orgPosition1',
                                    'orgnameAddress2', 'orgdateFrom2', 'orgdateTo2','orgnumHours2','orgPosition2',
                                    'orgnameAddress3', 'orgdateFrom3', 'orgdateTo3','orgnumHours3','orgPosition3',
                                    'orgnameAddress4', 'orgdateFrom4', 'orgdateTo4','orgnumHours4','orgPosition4',
                                    'orgnameAddress5', 'orgdateFrom5', 'orgdateTo5','orgnumHours5','orgPosition5',
                                    'orgnameAddress6', 'orgdateFrom6', 'orgdateTo6','orgnumHours6','orgPosition6',
                                    'orgnameAddress7', 'orgdateFrom7', 'orgdateTo7','orgnumHours7','orgPosition7',
                                    'orgnameAddress8', 'orgdateFrom8', 'orgdateTo8','orgnumHours8', 'orgType8', 'orgnameSponsor8',
                                    'orgnameAddress9', 'orgdateFrom9', 'orgdateTo9','orgnumHours9', 'orgType9', 'orgnameSponsor9',
                                    'orgnameAddress10', 'orgdateFrom10', 'orgdateTo10','orgnumHours10', 'orgType10', 'orgnameSponsor10',
                                    'orgnameAddress11', 'orgdateFrom11', 'orgdateTo11','orgnumHours11', 'orgType11', 'orgnameSponsor11',
                                    'orgnameAddress12', 'orgdateFrom12', 'orgdateTo12','orgnumHours12', 'orgType12', 'orgnameSponsor12',
                                    'orgnameAddress13', 'orgdateFrom13', 'orgdateTo13','orgnumHours13', 'orgType13', 'orgnameSponsor13',
                                    'orgnameAddress14', 'orgdateFrom14', 'orgdateTo14','orgnumHours14', 'orgType14', 'orgnameSponsor14',
                                    'orgnameSkill1', 'orgnameDistinct1', 'orgnameMembership1',
                                    'orgnameSkill2', 'orgnameDistinct2', 'orgnameMembership2',
                                    'orgnameSkill3', 'orgnameDistinct3', 'orgnameMembership3',
                                    'orgnameSkill4', 'orgnameDistinct4', 'orgnameMembership4',
                                    'orgnameSkill5', 'orgnameDistinct5', 'orgnameMembership5',
                                    'orgnameSkill6', 'orgnameDistinct6', 'orgnameMembership6');


                $pdf = App::make('snappy.pdf.wrapper');
                $pdf = PDF::loadView('c3forms.c3form', $datacompact)->setOption('page-width','215.9')->setOption('page-height','355.6');

                return $pdf->download('c3form.pdf');

         }

    }









