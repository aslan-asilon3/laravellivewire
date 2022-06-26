<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Datamember as Datamembers;

use App\Exports\DatamemberExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatamemberImport;

class Datamember extends Component
{
    public $datamembers;
    public function render()
    {

        $this->datamembers = Datamembers::select('id_member','no_hp','created_at')->get();
        return view('livewire.datamember');
    }

    public function export() 
    {
        return Excel::download(new DatamemberExport, 'Datamember.xlsx',now());
    }



    
}
