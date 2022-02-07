<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    public $table = "rombel";
    public $timestamps = true;
    protected $fillable = [
        'nama_rombel',
        'tingkat_kelas',
        'jum_L',
        'jum_P',
        'jum_total',
        'wali_kls',
        'kurikulum',
        'ruangan'
    ];
}