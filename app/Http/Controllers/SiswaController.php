<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        return view("/siswa.index");
    }

    public function daftar(Request $request)
    {
        return view("/siswa.daftar", ["email" => "contoh@gmail.com"]);
    }

    public function submitPendaftaran(Request $request)
    {
    }

    public function login(Request $request)
    {
    }

    public function logout(Request $request)
    {
    }

    public function kelas10(Request $request)
    {
    }

    public function kelas11(Request $request)
    {
    }

    public function kelas12(Request $request)
    {
    }
}
