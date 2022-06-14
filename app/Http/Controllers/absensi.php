<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class absensi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function absensi()
    {
        // mengambil data dari table pegawai
        $data = DB::table('users')->get(); // ambil
        $count = DB::table('users')->count(); // hitung
        return view('datakaryawan',['data'=>$data], ['count'=>$count]);
    }
}
