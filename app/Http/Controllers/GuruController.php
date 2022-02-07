<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guru;

use App\Exports\GuruExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
	{
		$guru = DB::table('guru')
        ->orderByRaw('nama_gr ASC')
        ->paginate(5);

        return view('sup_admin\guru', [
            'title' => "Guru",
            'guru' => $guru
        ]);
	}

	public function export()
	{
		return Excel::download(new GuruExport, 'guru.xlsx');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$guru = DB::table('guru')
		->where('nik_gr','like',"%".$cari."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('sup_admin.guru',['guru' => $guru]);

	}
}
