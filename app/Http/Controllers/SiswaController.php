<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        return view("/siswa.index");
    }

    public function daftar(Request $request): JsonResponse
    {
        $nis = $request->input("nis");
        $nama = $request->input("nama");
        $alamat = $request->input("alamat");
        $email = $request->input("email");
        $username = $request->input("username");
        $password = $request->input("password");
        $kelas = Kelas::where("nama", "=", $request->input("kelas"))->first();

        Siswa::create([
            "nis" => $nis,
            "nama" => $nama,
            "alamat" => $alamat,
            "username" => $username,
            "password" => $password,
            "id_kelas" => $kelas->id_kelas,
            "email" => $email
        ]);
        $siswa = Siswa::where("nis", "=", $nis);
        return response()->json([
            "nis" => $nis,
            "nama" => $nama,
            "alamat" => $alamat,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            "id_kelas" => $kelas->id_kelas
        ]);

        //return view("/siswa.daftar", ["email" => "contoh@gmail.com"]);
    }

    public function submitPendaftaran(Request $request)
    {
    }

    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        $siswa = Siswa::where("username", "=", $username)->Where("password", "=", $password)->first();

        if (is_null($siswa))
            return response()->json(["message" => "gagal login"]);
        else
            return response()->json([
                "nama" => $siswa->nama,
                "kelas" => $siswa->kelas->nama
            ]);
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
