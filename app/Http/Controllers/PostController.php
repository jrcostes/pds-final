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
        $products = Sheet::all();

        return view('c3data.homepage', compact('products'));
    }

    /*public function export()
    {
        return Excel::download(new SheetExport, 'users.xlsx');
    }*/

    public function store(Request $request)
    {
        $request->all();

        Sheet::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
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

        $orgnameAddress1 = $request->input('orgnameAddress1');
        $orgdateFrom1 = $request->input('orgdateFrom1');
        $orgdateTo1 = $request->input('orgdateTo1');
        $orgnumHours1 = $request->input('orgnumHours1');
        $orgPosition1 = $request->input('orgPosition1');

        $orgnameAddress2 = $request->input('orgnameAddress2');
        $orgdateFrom2 = $request->input('orgdateFrom2');
        $orgdateTo2 = $request->input('orgdateTo2');
        $orgnumHours2 = $request->input('orgnumHours2');
        $orgPosition2 = $request->input('orgPosition2');

        $orgnameAddress3 = $request->input('orgnameAddress3');
        $orgdateFrom3 = $request->input('orgdateFrom3');
        $orgdateTo3 = $request->input('orgdateTo3');
        $orgnumHours3 = $request->input('orgnumHours3');
        $orgPosition3 = $request->input('orgPosition3');

        $orgnameAddress4 = $request->input('orgnameAddress4');
        $orgdateFrom4 = $request->input('orgdateFrom4');
        $orgdateTo4 = $request->input('orgdateTo4');
        $orgnumHours4 = $request->input('orgnumHours4');
        $orgPosition4 = $request->input('orgPosition4');

        $orgnameAddress5 = $request->input('orgnameAddress5');
        $orgdateFrom5 = $request->input('orgdateFrom5');
        $orgdateTo5 = $request->input('orgdateTo5');
        $orgnumHours5 = $request->input('orgnumHours5');
        $orgPosition5 = $request->input('orgPosition5');

        $orgnameAddress6 = $request->input('orgnameAddress6');
        $orgdateFrom6 = $request->input('orgdateFrom6');
        $orgdateTo6 = $request->input('orgdateTo6');
        $orgnumHours6 = $request->input('orgnumHours6');
        $orgPosition6 = $request->input('orgPosition6');

        $orgnameAddress7 = $request->input('orgnameAddress7');
        $orgdateFrom7 = $request->input('orgdateFrom7');
        $orgdateTo7 = $request->input('orgdateTo7');
        $orgnumHours7 = $request->input('orgnumHours7');
        $orgPosition7 = $request->input('orgPosition7');

        $orgnameAddress8 = $request->input('orgnameAddress8');
        $orgdateFrom8 = $request->input('orgdateFrom8');
        $orgdateTo8 = $request->input('orgdateTo8');
        $orgnumHours8 = $request->input('orgnumHours8');
        $orgType8 = $request->input('orgType8');
        $orgnameSponsor8 = $request->input('orgnameSponsor8');

        $orgnameAddress9 = $request->input('orgnameAddress9');
        $orgdateFrom9 = $request->input('orgdateFrom9');
        $orgdateTo9 = $request->input('orgdateTo9');
        $orgnumHours9 = $request->input('orgnumHours9');
        $orgType9 = $request->input('orgType9');
        $orgnameSponsor9 = $request->input('orgnameSponsor9');

        $orgnameAddress10 = $request->input('orgnameAddress10');
        $orgdateFrom10 = $request->input('orgdateFrom10');
        $orgdateTo10 = $request->input('orgdateTo10');
        $orgnumHours10 = $request->input('orgnumHours10');
        $orgType10 = $request->input('orgType10');
        $orgnameSponsor10 = $request->input('orgnameSponsor10');

        $orgnameAddress11 = $request->input('orgnameAddress11');
        $orgdateFrom11 = $request->input('orgdateFrom11');
        $orgdateTo11 = $request->input('orgdateTo11');
        $orgnumHours11 = $request->input('orgnumHours11');
        $orgType11 = $request->input('orgType11');
        $orgnameSponsor11 = $request->input('orgnameSponsor11');

        $orgnameAddress12 = $request->input('orgnameAddress12');
        $orgdateFrom12 = $request->input('orgdateFrom12');
        $orgdateTo12 = $request->input('orgdateTo12');
        $orgnumHours12 = $request->input('orgnumHours12');
        $orgType12 = $request->input('orgType12');
        $orgnameSponsor12 = $request->input('orgnameSponsor12');

        $orgnameAddress13 = $request->input('orgnameAddress13');
        $orgdateFrom13 = $request->input('orgdateFrom13');
        $orgdateTo13 = $request->input('orgdateTo13');
        $orgnumHours13 = $request->input('orgnumHours13');
        $orgType13 = $request->input('orgType13');
        $orgnameSponsor13 = $request->input('orgnameSponsor13');

        $orgnameAddress14 = $request->input('orgnameAddress14');
        $orgdateFrom14 = $request->input('orgdateFrom14');
        $orgdateTo14 = $request->input('orgdateTo14');
        $orgnumHours14 = $request->input('orgnumHours14');
        $orgType14 = $request->input('orgType14');
        $orgnameSponsor14 = $request->input('orgnameSponsor14');

        $orgnameSkill1 = $request->input('orgnameSkill1');
        $orgnameDistinct1 = $request->input('orgnameDistinct1');
        $orgnameMembership1 = $request->input('orgnameMembership1');

        $orgnameSkill2 = $request->input('orgnameSkill2');
        $orgnameDistinct2 = $request->input('orgnameDistinct2');
        $orgnameMembership2 = $request->input('orgnameMembership2');

        $orgnameSkill3 = $request->input('orgnameSkill3');
        $orgnameDistinct3 = $request->input('orgnameDistinct3');
        $orgnameMembership3 = $request->input('orgnameMembership3');

        $orgnameSkill4 = $request->input('orgnameSkill4');
        $orgnameDistinct4 = $request->input('orgnameDistinct4');
        $orgnameMembership4 = $request->input('orgnameMembership4');

        $orgnameSkill5 = $request->input('orgnameSkill5');
        $orgnameDistinct5 = $request->input('orgnameDistinct5');
        $orgnameMembership5 = $request->input('orgnameMembership5');

        $orgnameSkill6 = $request->input('orgnameSkill6');
        $orgnameDistinct6 = $request->input('orgnameDistinct6');
        $orgnameMembership6 = $request->input('orgnameMembership6');
        $form_radio = $request->input('form_radio');
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

        if($form_radio == 'c3form') {
            $pdf = App::make('snappy.pdf.wrapper');
            $pdf = PDF::loadView('c3forms.c3form', $datacompact)->setOption('page-width','215.9')->setOption('page-height','355.6');

            return $pdf->download('c3form.pdf');
        }


        else{
            Sheet::create($datacompact);

            return view('c3data.index')
            ->with('success', 'Entry Saved');
        }






        //
       // $pdf = App::make('snappy.pdf.wrapper');
       //$pdf = PDF::loadView('c3forms.c3form',
       // return $pdf->download('c3form.pdf');

    }

    //public function excel_form() {

    //    Excel::load(env('EXCEL_PATH'), function($excel){
    //        $excel->sheet('C3', function($sheet) {

    //            $sheet->cell('A6', function($cell) {
    //                $cell->setValue($_GET['orgnameAddress1']);
    //            });

    //        });
     //   })->download('xlsx');
   // }

}



