<?php

namespace App\Http\Controllers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Form;
use App\C1answers;
use App\Sheets2;
use App\Sheets3;
use App\Sheets4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use function PHPSTORM_META\map;

class PostController
{
    public function pdf_print(){
        $id = $_GET['formid'];

        $form = C1answers::where('surname', $id)->first();

        $answersc1 = json_decode($form->c1answers, true);
        $answersc2 = json_decode($form->c2answers, true);
        $answersc3 = json_decode($form->c3answers, true);
        $answersc4 = json_decode($form->c4answers, true);
        $surname = $form->surname;
        $firstname = $form->surname;
        $sex = $form->sex;


        $pdf = App::make('snappy.pdf.wrapper');
        $pdf = PDF::loadvIEW('pdf.pdftemplate', compact('answersc1', 'answersc2', 'answersc3', 'answersc4', 'firstname', 'surname', 'sex'));

        return $pdf->stream('pdsform.pdf');
    }
}
