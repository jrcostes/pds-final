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
use App\Http\Controllers\User\FormController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;

use Maatwebsite\Excel\Facades\Excel;


Auth::routes();
Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('user.home');
});
Route::get('/dbtable', function () {
    if (session('status')) {
        return redirect()->route('admin.dbtable')->with('status', session('status'));
    }

    return redirect()->route('admin.dbtable');
});
Route::get('admin/pdf1print', 'Admin\HomeController@pdf_print')->name('print_data');
Route::get('user/pdf1print', 'User\FormController@pdf_print')->name('print_data');
Route::get('user/show1form', 'User\FormController@formshow')->name('formshow');
Route::get('user/edit1form', 'User\EditController@show')->name('formshow');
Route::get('/downloadExcel{id}', [Controller::class, 'downloadExcel'])->name('downloadExcel');
Route::get('/excel_form{id}', [Controller::class, 'ExcelController'])->name('excelform');


Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'FormController@index')->name('home');
    Route::get('forms', 'FormController@show')->name('forms');
    Route::resource('formss', 'EditController');

});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('dbtable', 'HomeController@show')->name('dbtable');

    Route::resource('users', 'UsersController');
});


Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
        if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
            Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
            Route::post('password', 'ChangePasswordController@update')->name('password.update');
        }
    });

    Route::get('/c1formsubmit', [PostController::class, 'submittal'])->name('print_data');
