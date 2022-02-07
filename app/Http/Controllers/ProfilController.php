<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProfilImport;
use Alert;

class ProfilController extends Controller
{
    public function index(){

        $profil = DB::table('profil')
        ->orderByRaw('nama_sekolah ASC')
        ->paginate(10);

        return view('admin\daftar_profil', [
            'title' => "Sekolah",
            'profil' => $profil
        ]);
    }

    public function import(){
        Excel::import(new ProfilImport,
        request()->file('file'));
        Alert::success('Congrats', 'Berhasil Menambahkan Data Profil Sekolah');
        return back();
    }
}