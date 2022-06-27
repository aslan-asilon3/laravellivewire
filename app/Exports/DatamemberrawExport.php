<?php

namespace App\Exports;

use App\Models\Datamemberraw;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illmuniate\Foundation\Bus\Dispatchable;

class DatamemberrawExport implements FromCollection, WithHeadings, ShouldQueue
{
    // use batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function collection()
    {
        return Datamemberraw::all();
    }

    public function headings(): array {
        return [
            "ID","ID Member","No HP","Status Cek Data". "Created At"
        ];
    }

    public function export()
    {
        $this->exporting = true;
        $this->exportFinished = false;

        $batch = Bus::batch([
            new ExportJob(),
        ])->dispatch();

        $this->batchId = $batch->id;

    }





}
