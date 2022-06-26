<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatamemberImport;

class DatamemberController extends Controller
{
    //
    public function index()
    {
        return view('datamember');
    }

    public function import(Request $request) 
    {

        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        
            $path = $request->file('file');


           Excel::import(new DatamemberImport, $path);       

           
            return back()->with('success', 'Excel Data Imported successfully.');
        // Excel::import(new DatamemberImport, 'Datamemeber.xlsx');
        
        // return redirect('/datamember')->with('success', 'All good!');
    }

}
