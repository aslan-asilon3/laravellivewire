<?php

namespace App\Exports;

use App\Models\Datasales;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DatasalesExport implements FromCollection,WithHeadings
{
    public function collection()
    {
        return Datasales::all();
    }

    public function headings(): array {
        return [
            "ID","ID Member","Batch","poin","No HP","Tanggal","Source","Recipient","Status Member","Status Cek is Member"
        ];
    }
}
