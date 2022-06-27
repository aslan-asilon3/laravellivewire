<?php

namespace App\Imports;

use App\Models\Datamember;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;




class DatamemberImport implements ToModel,WithStartRow
{

    public $rowCount = 0;
    
    public function model(array $row)
    {
        

        return new Datamember([
            //
            'id_member'     => $row[1],
            'no_hp'    => $row[2], 
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
