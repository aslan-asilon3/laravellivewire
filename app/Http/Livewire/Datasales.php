<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Datasales as Datasaleses;

// use App\Exports\DatamemberExport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\DatamemberImport;


class Datasales extends Component
{
    public $datasaleses;
    public function render()
    {

        $this->datasaleses = Datasales::select('id_member','batch','poin','no_hp','tanggal','source','recipient','status_member','status_cek_is_member')->get();
        return view('livewire.datasales');
    }

}
