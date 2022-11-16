<?php
// namespace App\Http\Controllers;

// use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
// use Illuminate\Support\Facades\App;
// use Illuminate\Http\Request;



// class PdfController extends Controller
// {
//     public function print_form(Request $request){
//         $orgnameAddress1 = $request->input('orgnameAddress1');
//         $pdf = App::make('snappy.pdf.wrapper');
//         $pdf = PDF::loadView('c3forms.c3form', compact('orgnameAddress1'));
//         return $pdf->download('c3form.pdf');
//     }
// }
