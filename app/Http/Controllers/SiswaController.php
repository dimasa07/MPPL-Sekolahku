<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Services\KelasService;
use App\Services\SiswaService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SiswaController extends Controller
{
    private SiswaService $siswaService;
    private KelasService $kelasService;

    public function __construct(SiswaService $siswaService, KelasService $kelasService)
    {
        $this->siswaService = $siswaService;
        $this->kelasService = $kelasService;
    }

    public function index(Request $request)
    {
        return view("/siswa.index");
    }

    public function daftar(Request $request)
    {
        $siswa = new Siswa();
        $siswa->fill($request->input());

        $hasil = $this->siswaService->tambah($siswa);

        return response($hasil);

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

    public function test(Request $request)
    {
        // getByNis
        // $siswa = $this->siswaService->getByNis($request->input("nis"));

        // getByNis
        // $siswa = $this->siswaService->getByNama($request->input("nama"));

        // getByKelas
        // $kelas = $this->kelasService->getByNama($request->input("nama"));
        // $siswa = $this->siswaService->getByKelas($kelas);

        // getAll
        $siswa = $this->siswaService->getAll();


        return response($siswa);
    }
}
