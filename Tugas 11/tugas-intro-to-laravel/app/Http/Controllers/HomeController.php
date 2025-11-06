<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showTable()
    {
        return view('table');
    }

    public function showDataTable()
    {
        return view('data-table');
    }
}
