<?php

namespace App\Http\Controllers;
use App\C1answers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
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
        $user_id = Auth::id();
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf = PDF::loadvIEW('pdf.pdftemplate', compact('answersc1', 'answersc2', 'answersc3', 'answersc4', 'firstname', 'surname', 'sex'));

        return $pdf->stream('pdsform.pdf');
    }
}
