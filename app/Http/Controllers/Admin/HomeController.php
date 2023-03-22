<?php

namespace App\Http\Controllers\Admin;
use App\C1answers;

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
}
