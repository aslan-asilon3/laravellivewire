<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacontact extends Model
{
    protected $table = 'datacontacts';
    protected $guarded = [];

    protected $fillable = [
        'name', 'phone'
    ];
    public $timestamps = true;
}
