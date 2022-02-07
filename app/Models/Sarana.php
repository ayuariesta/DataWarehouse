<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    use HasFactory;
    public $table = "sarana";
    public $timestamps = true;
    protected $fillable = [
        'jenis_sarana',
        'letak',
        'kepemilikan',
        'spesifikasi',
        'jumlah',
        'laik',
        'tdk_laik'
    ];
}