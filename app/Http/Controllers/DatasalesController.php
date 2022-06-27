<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatasalesImport;
use App\Exports\DatasalesExport;

class DatasalesController extends Controller
{
    //
    public function index()
    {
        return view('datasales');
    }

    public function import() 
    {
        Excel::import(new DatasalesImport, 'Data-Sales.xlsx');
        
        return redirect('/datasales')->with('success', 'Data Import Successfully!');
    }

    public function export() 
    {
        return Excel::download(new DatasalesExport, 'Data-sales.xlsx');

        return redirect('/datasales')->with('success', 'Data Export Successfully!');
    }


    
}
