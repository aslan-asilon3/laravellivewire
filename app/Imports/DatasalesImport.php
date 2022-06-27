<?php

namespace App\Imports;

use App\Models\Datasales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Helpers\CleanNoHP;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class DatasalesImport implements ToModel,WithStartRow,WithProgressBar
{

    public $rowCount = 0;
    use CleanNoHP;
    
    public function model(array $row)
    {
        

        return new Datasales([
            //
            'id_member' => $row[1],
            'batch' => $row[2],
            'poin' => $row[3],
            'no_hp' => $this->cek($row[4]),
            'tanggal' => $row[5],
            'source' => $row[6],
            'recipient' => $row[7],
            'status_member' => $row[8],
            'status_cek_is_member' => $row[9],
            // 'created_at' => ($row[3]),
        ]);

    }

    public function getRowCount(){
        return $this->rowCount;
    }

    public function startRow(): int
    {
        return 2;
    }

}
