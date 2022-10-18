<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PdfController;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

Auth::routes();

//Route::resource('post','PostController');

Route::get('/home', function () {
    return view('c3data.index');
});

/*Route::get('/sender', function() {
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('c3data.index');
    //return $pdf->inline();
    return $pdf->download('c3data.index.pdf');
});*/

Route::get('/temp', 'PostController@index');
Route::resource('sheet', 'PostController');



Route::get('/export', [PostController::class, 'export']);
Route::get('/wkhtmltopdf', [PostController::class, 'print_form'])->name('print_data');
//Route::get('exporter', 'PostController@export');
//Route::get('excel', 'PostController@excel');

Auth::routes();

Route::get('/home', 'postController@index')->name('home');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
