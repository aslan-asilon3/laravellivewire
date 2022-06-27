<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Datamemberraw as Datamemberraws;

use App\Jobs\ExportJob;
use Illumintae\Support\Facades\Bus;
use Illumintae\Support\Facades\Storage;

class Datamemberraw extends Component
{
    public $datamemberraws;

    public $batchId;
    public $exporting = false;
    public $exportFinished = false;

    public function export()
    {
        $this->exporting = true;
        $this->exportFinished = false;

        $batch = Bus::batch([
            new DatamemberrawExport(),
        ])->dispatch();

        $this->batchId = $batch->id;

    }

    public function downloadExport()
    {
        return Storage::download('public/Data-member-raw.xlsx');
    }

    public function updateExportProgress()
    {
        $this->exportFinished = $this->exportBatch->finished();
        if ($this->exportFinished) {
            $this->exporting =false;
        }
    }

    public function render()
    {

        $this->datamemberraws = Datamemberraws::select('id_member','no_hp','status_cek_data')->get();
        return view('livewire.datamemberraw');
    }
}
