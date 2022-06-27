<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamemberraw extends Model
{
    protected $table = 'datamemberraws';
    protected $guarded = [];

    protected $fillable = [
        'id_member', 'no_hp', 'status_cek_data'
    ];
    public $timestamps = true;
}
