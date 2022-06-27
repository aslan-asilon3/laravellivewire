<?php

namespace App\Imports;

use App\Models\Datamemberraw;
use App\Models\Datamember;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Helpers\CleanNoHP;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithProgressBar;

// class DatamemberrawImport implements ToModel, WithStartRow,WithProgressBar
class DatamemberrawImport implements ToModel, WithStartRow
{
    use CleanNoHP;
    // use Importable;

 
    public function model(array $row)
    {
        

        $UpdateMember = new Datamemberraw;
 
        $UpdateMember->id_member = $row[1];
        $UpdateMember->no_hp = $this->cek($row[2]);
 
        $UpdateMember->save();

        $cekNohp = Datamember::where('no_hp', '=', $this->cek($row[2]))->first();
        // dd($cekNohp);

        if($cekNohp){
            
            $cekNohp->update([
                'id_member' => $this->cek($row[1])
            ]);

        }
        else{
            Datamember::create([
            'id_member' => $row[1],
            'no_hp'     => $this->cek($row[2])
        ]);
        }



    }
    

    public function getRowCount(){
        return $this->rowCount;
    }

    public function startRow(): int
    {
        return 2;
    }
}
