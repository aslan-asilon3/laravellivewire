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

    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        
    $path = $request->file('file');

   
    Excel::import(new DatasalesImport, $path); 
    
    return back()->with('success', 'Excel Data Sales Imported successfully.');
    }

    public function export() 
    {
        return Excel::download(new DatasalesExport, 'Data-sales ' . now() . '.xlsx' );

        return redirect('/datasales')->with('success', 'Data Export Successfully!');
    }


    
}
