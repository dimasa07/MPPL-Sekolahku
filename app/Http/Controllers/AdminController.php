<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Services\GuruService;
use App\Services\KelasService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private KelasService $kelasService;
    private GuruService $guruService;

    public function __construct(KelasService $kelasService, GuruService $guruService)
    {
        $this->kelasService = $kelasService;
        $this->guruService = $guruService;
    }

    public function index()
    {
        return view("/admin.index");
    }

    public function login()
    {
        return view("/admin.login");
    }

    public function logout()
    {
    }

    public function dataSiswa()
    {
        $siswas = Siswa::all();
        foreach ($siswas as $siswa) {
            echo "<li>" . $siswa->nama;
        }
        //return view("/admin.data_siswa");
    }

    public function detailSiswa()
    {
        return view("/admin.detail_siswa");
    }

    public function updateSiswa()
    {
        return view("/admin.update_siswa");
    }

    public function dataGuru()
    {
        return view("/admin.data_guru");
    }

    public function detailGuru()
    {
        return view("/admin.detail_guru");
    }

    public function updateGuru()
    {
        return view("/admin.update_guru");
    }

    public function tambahGuru(Request $request)
    {
        $guru = new Guru();
        $guru->fill($request->input());

        $hasil = $this->guruService->tambah($guru);

        return response($hasil);
    }

    public function tambahMapel(Request $request)
    {
        $nama = $request->input("nama");

        $mapel = Mapel::create([
            "nama" => $nama
        ]);

        return response($mapel);
    }

    public function dataMateri()
    {
        return view("/admin.data_materi");
    }

    public function tambahMateri()
    {
        return view("/admin.tambah_materi");
    }

    public function updateMateri()
    {
        return view("/admin.update_materi");
    }

    public function editSiswa()
    {
    }

    public function test(Request $request)
    {
        // Tambah kelas
        // $kelas = new Kelas();
        // $kelas->fill($request->input());
        // $this->kelasService->tambah($kelas);
        
        // Get wali
        $kelas = $this->kelasService->getByNama("9D");

        return response($kelas->guru->nama);
    }
}
