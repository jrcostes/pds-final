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
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PdfController;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


Auth::routes();
Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});
Route::get('/dbtable', function () {
    if (session('status')) {
        return redirect()->route('admin.dbtable')->with('status', session('status'));
    }

    return redirect()->route('admin.dbtable');
});
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('dbtable', 'HomeController@show')->name('dbtable');
});



