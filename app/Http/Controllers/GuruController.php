<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view("/guru.index");
    }

    public function login()
    {
        return view("/guru.login");
    }

    public function daftar()
    {
        return view("/guru.daftar");
    }

    public function tambahMateri()
    {
        return view("/guru.tambah_materi");
    }

    public function absensiSiswa(Request $request)
    {
        $nip = $request->input("nip");
        $guru = Guru::where("nip", "=", $nip)->first();
        $kelas = $guru->kelas;

        return response($kelas);
    }

    public function logout()
    {
    }
}
