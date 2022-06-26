<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\DatamemberImport;

class DatasalesController extends Controller
{
    //
    public function index()
    {
        return view('datasales');
    }
}
