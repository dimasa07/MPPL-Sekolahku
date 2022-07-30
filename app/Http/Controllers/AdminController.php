<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Services\GuruService;
use App\Services\KelasService;
use App\Services\SiswaService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private KelasService $kelasService;
    private GuruService $guruService;
    private SiswaService $siswaService;

    public function __construct(SiswaService $siswaService, KelasService $kelasService, GuruService $guruService)
    {
        $this->kelasService = $kelasService;
        $this->guruService = $guruService;
        $this->siswaService = $siswaService;
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

    public function dataSiswa(Request $request)
    {
        $siswas = $this->siswaService->getAll();
        foreach ($siswas as $siswa) {
            if (is_null($siswa->username) || empty($siswa->username)) {
                $siswa->statusAkun = "Tidak Aktif";
            } else {
                $siswa->statusAkun = "Aktif";
            }
        }
        return view("/admin.data_siswa", [
            "siswas" => $siswas,
            "delete" => $request->input("delete"),
            "hasilTambah" => $request->input("hasilTambah")
        ]);
    }

    public function tambahSiswa(Request $request)
    {
        $hasil = null;
        $nis = $request->input("nis");
        if (!is_null($nis)) {
            if (is_null($this->siswaService->getByNis($nis))) {
                $siswa = new Siswa();
                $siswa->fill($request->input());
                $hasil = $this->siswaService->tambah($siswa);

                return redirect(route("admin.data_siswa", ["hasilTambah" => $hasil]));
            } else {
                $hasil = 0;
            }
        }

        $semuaKelas = $this->kelasService->getAll();
        return view("/admin.tambah_siswa", ["semuaKelas" => $semuaKelas, "hasilTambah" => $hasil]);
    }

    public function detailSiswa()
    {
        return view("/admin.detail_siswa");
    }

    public function updateSiswa()
    {
        return view("/admin.update_siswa");
    }

    public function deleteSiswa(Request $request)
    {
        $nis = $request->input("nis");
        $hasil = $this->siswaService->delete($nis);

        return redirect(route("admin.data_siswa", ["delete" => $hasil]), 302);
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
