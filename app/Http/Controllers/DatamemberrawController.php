<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DatamemberrawImport;
use App\Exports\DatamemberrawExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Helpers\CleanNoHP;

class DatamemberrawController extends Controller
{
    //
    public function index()
    {
        return view('datamemberraw');
    }

    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        
    $path = $request->file('file');

    Excel::import(new DatamemberrawImport, $path); 
    
    return back()->with('success', 'Excel Data Sales Imported successfully.');
    }

    public function export() 
    {
        return Excel::download(new DatamemberrawExport, 'Data Member Raw '.now() .'.xlsx');

        return redirect('/datasales')->with('success', 'Data Export Successfully!');
    }

    public function updateExportProgress()
    {
        $this->exportFinished = $this->exportBatch->finished();

        if($this->exportFinished) {
            $this->exporting = false;
        }
    }
}
