<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prasarana extends Model
{
    use HasFactory;
    public $table = "prasarana";
    public $timestamps = true;
    protected $fillable = [
        'nama_pras',
        'ket',
        'panjang',
        'lebar',
        'konkerusakan_pondasi',
        'konkerusakan_skb',
        'konkerusakan_plesterstruktur',
        'konkerusakan_kudakkuda',
        'konkerusakan_kasoatap',
        'konkerusakan_reng',
        'konkerusakan_penutupatap',
        'konkerusakan_rangkaplafon',
        'konkerusakan_tutupplafon',
        'konkerusakan_batadinding',
        'konkerusakan_plesterdinding',
        'konkerusakan_daunpintu',
        'konkerusakan_kusen',
        'konkerusakan_tutuplantai',
        'konkerusakan_inslistrik',
        'konkerusakan_insair',
        'konkerusakan_drainase',
        'konkerusakan_finplafon',
        'konkerusakan_findinding',
        'konkerusakan_finkusen',
        'konkerusakan_presentasekerusakan',
        'status_kep'
    ];
}