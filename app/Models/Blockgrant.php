<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blockgrant extends Model
{
    use HasFactory;
    public $table = "blockgrant";
    public $timestamps = true;
    protected $fillable = [
        'tahun',
        'jns_bantuan',
        'sumber_bantuan',
        'besar_bantuan',
        'dana_pendamping',
        'peruntukan_dana'
    ];
}