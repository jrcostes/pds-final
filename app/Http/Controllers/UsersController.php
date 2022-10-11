<?php

namespace App\Http\Controllers;

use App\Exports\SheetExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends PostController
{
    public function export ()
    {
        return Excel::download(new SheetExport, 'users.xlsx');
    }
}
