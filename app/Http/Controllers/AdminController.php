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
use Illuminate\Support\Facades\Session;

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
            "hasilTambah" => $request->input("hasilTambah")
        ]);
    }

    public function tambahSiswa(Request $request)
    {
        $nis = $request->input("nis");
        if (!is_null($nis)) {
            if (is_null($this->siswaService->getByNis($nis))) {
                $siswa = new Siswa();
                $siswa->fill($request->input());
                $hasil = $this->siswaService->tambah($siswa);
                if ($hasil == 1) {
                    $icon =  "success";
                    $title = "Tambah Siswa sukses!";
                } else if ($hasil == 0) {
                    $icon =  "warning";
                    $title = "Tambah Siswa gagal!";
                }
                Session::flash("alert", "");
                Session::flash("icon", $icon);
                Session::flash("title", $title);
                Session::flash("text", "");
                return redirect(route("admin.data_siswa"));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Tambah Siswa gagal");
                Session::flash("text", "Nomor Induk Siswa Sudah Tersedia");
            }
        }

        $semuaKelas = $this->kelasService->getAll();
        return view("/admin.tambah_siswa", ["semuaKelas" => $semuaKelas]);
    }

    public function tambahGuru(Request $request)
    {
        $nip = $request->input("nip");
        if (!is_null($nip)) {
            if (is_null($this->guruService->getByNip($nip))) {
                $guru = new Guru();
                $guru->fill($request->input());
                $hasil = $this->guruService->tambah($guru);
                if ($hasil == 1) {
                    $icon =  "success";
                    $title = "Tambah Guru sukses!";
                } else if ($hasil == 0) {
                    $icon =  "warning";
                    $title = "Tambah Guru gagal!";
                }
                Session::flash("alert", "");
                Session::flash("icon", $icon);
                Session::flash("title", $title);
                Session::flash("text", "");
                return redirect(route("admin.data_guru"));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Tambah Guru gagal");
                Session::flash("text", "Nomor Induk Pengajar Sudah Tersedia");
            }
        }

        $semuaKelas = $this->kelasService->getAll();
        return view("/admin.tambah_guru");
    }

    public function tambahKelas(Request $request)
    {
        $nama = $request->input("nama");
        if (!is_null($nama)) {
            if (is_null($this->kelasService->getByNama($nama))) {
                $kelas = new Kelas();
                $kelas->nama = $request->string("nama");
                $kelas->nip = $request->string("nip");
                $hasil = $this->kelasService->tambah($kelas);
                if ($hasil == 1) {
                    $icon =  "success";
                    $title = "Tambah Kelas sukses!";
                } else if ($hasil == 0) {
                    $icon =  "warning";
                    $title = "Tambah Kelas gagal!";
                }
                Session::flash("alert", "");
                Session::flash("icon", $icon);
                Session::flash("title", $title);
                Session::flash("text", "");
                return redirect(route("admin.data_kelas"));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Tambah Kelas gagal");
                Session::flash("text", "Nama Kelas Sudah Tersedia");
            }
        }

        $semuaGuru = $this->guruService->getAll();
        return view("/admin.tambah_kelas", ["semuaGuru" => $semuaGuru]);
    }

    public function detailSiswa()
    {
        return view("/admin.detail_siswa");
    }

    public function editSiswa()
    {
        return view("/admin.edit_siswa");
    }

    public function hapusSiswa(Request $request)
    {
        $nis = $request->input("nis");
        $hasil = $this->siswaService->delete($nis);

        if ($hasil == 1) {
            $icon =  "success";
            $title = "Hapus Siswa sukses!";
        } else if ($hasil == 0) {
            $icon =  "warning";
            $title = "Hapus Siswa gagal!";
        }
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", "");
        return redirect(route("admin.data_siswa"), 302);
    }

    public function hapusGuru(Request $request)
    {
        $nip = $request->input("nip");
        $hasil = $this->guruService->delete($nip);

        if ($hasil == 1) {
            $icon =  "success";
            $title = "Hapus Guru sukses!";
        } else if ($hasil == 0) {
            $icon =  "warning";
            $title = "Hapus Guru gagal!";
        }
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", "");
        return redirect(route("admin.data_guru"), 302);
    }

    public function hapusKelas(Request $request)
    {
        $id_kelas = $request->input("id_kelas");
        $hasil = $this->kelasService->delete($id_kelas);

        if ($hasil == 1) {
            $icon =  "success";
            $title = "Hapus Kelas sukses!";
        } else if ($hasil == 0) {
            $icon =  "warning";
            $title = "Hapus Kelas gagal!";
        }
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", "");
        return redirect(route("admin.data_kelas"), 302);
    }

    public function dataGuru()
    {
        $gurus = $this->guruService->getAll();
        foreach ($gurus as $guru) {
            if (is_null($guru->username) || empty($guru->username)) {
                $guru->statusAkun = "Tidak Aktif";
            } else {
                $guru->statusAkun = "Aktif";
            }
        }

        return view("/admin.data_guru", [
            "gurus" => $gurus
        ]);
    }

    public function dataKelas()
    {
        $kelas = $this->kelasService->getAll();

        return view("/admin.data_kelas", [
            "kelas" => $kelas
        ]);
    }

    public function detailGuru()
    {
        return view("/admin.detail_guru");
    }

    public function editGuru()
    {
        return view("/admin.edit_guru");
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

    public function editMateri()
    {
        return view("/admin.edit_materi");
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
