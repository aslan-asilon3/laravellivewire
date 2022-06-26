<?php

namespace App\Helpers;
// use App\Models\DataSales;
// use App\Models\UnicharmMemberRaw;
// use App\Models\UnicharmMember;
use App\Models\Datamember;

Trait CleanNoHP{

    function cek($hp)
    {
        $data = $hp;

        $char_rep = array("/", "+", ":", "-", ",", "_", "?", "!", "#", "$", "%");
            $data = str_replace($char_rep, "", $data);
        if (substr(trim($data), 0, 4) == '6262') {
            // echo '2'.substr($data, 2). "\n";
            $data = "0".substr($data, 4);
        } else if (substr(trim($data), 0, 2) == '62'){
            // echo '1'.substr($data, 4). "\n";
            $data = "0".substr($data, 2);
        } else {
            if (substr(trim($data), 0, 1) == '0') {
                // echo '0'.substr($data, 1). "\n";
                $data = "0".substr($data, 1);
            }
        }


        return $data;
    }
    // var_dump(cek())

    function cekIdMember($id_member){

        $member_raw = UnicharmMember::whereNull('status_cek_data')
        //1611150
        ->where('id', '>' ,1648169)
        ->take(60000)
        ->get();

        foreach ($member_raw as $m) {

            $clean_no_hp = str_replace($char_rep, "", $m->no_hp);

            $member = UnicharmMember::where('no_hp', $clean_no_hp)->first();

            if (!$member) {
                UnicharmMember::create([
                    'id_member' => $m->id_member,
                    'no_hp' => $clean_no_hp,
                ]);

                echo 'create : '.$clean_no_hp. "\n";
            } else {
                $member->id_member = $m->id_member;
                $member->save();
                echo 'update : '.$m->id_member. "\n";
            }

            $member_raw = UnicharmMember::find($m->id);
            $member_raw->status_cek_data = '1';
            $member_raw->save();



    }

    
}


}
?>