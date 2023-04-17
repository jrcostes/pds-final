<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use App\C1answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FormController
{
    public function index()
    {
        return view('user.home');
    }
    public function show()
    {
        $authid = Auth::id();

        $form = C1answers::where('id', $authid)->first();
        $user_id = $form->user_id;
        $surname = $form->surname;
        $firstname = $form->surname;
        $sex = $form->sex;
        return view('user.forms.index', compact('user_id','surname','firstname','sex'));
    }
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
    public function formshow(){
        $id = $_GET['formid'];

        $form = C1answers::where('surname', $id)->first();

        $answersc1 = json_decode($form->c1answers, true);
        $answersc2 = json_decode($form->c2answers, true);
        $answersc3 = json_decode($form->c3answers, true);
        $answersc4 = json_decode($form->c4answers, true);
        $surname = $form->surname;
        $firstname = $form->surname;
        $sex = $form->sex;

        return view('user.forms.show', compact('answersc1', 'answersc2', 'answersc3', 'answersc4', 'firstname', 'surname', 'sex'));
    }
}
