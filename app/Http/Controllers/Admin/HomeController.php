<?php

namespace App\Http\Controllers\Admin;
use App\C1answers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        return view('admin.home');
    }
    public function show()
    {
        $products = C1answers::all();
        return view('admin.datatables.datatables',compact('products'));
    }
    public function pdf_print(){
        $id = $_GET['formid'];

        $form = C1answers::where('id', $id)->first();

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
