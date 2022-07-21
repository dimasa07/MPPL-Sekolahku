<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(Request $request)
    {
        return view("/beranda", ["email" => "contoh@gmail.com"]);
    }

    public function tentang(Request $request)
    {
        return view("/tentang", ["email" => "contoh@gmail.com"]);
    }

    public function pelajaran(Request $request)
    {
        return view("/pelajaran", ["email" => "contoh@gmail.com"]);
    }
}
