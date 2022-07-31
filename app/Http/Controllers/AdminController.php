<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\JadwalPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Services\GuruService;
use App\Services\JadwalPelajaranService;
use App\Services\KelasService;
use App\Services\MapelService;
use App\Services\SiswaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private KelasService $kelasService;
    private GuruService $guruService;
    private SiswaService $siswaService;
    private MapelService $mapelService;
    private JadwalPelajaranService $jadwalPelajaranService;

    public function __construct(
        SiswaService $siswaService,
        KelasService $kelasService,
        GuruService $guruService,
        MapelService $mapelService,
        JadwalPelajaranService $jadwalPelajaranService
    ) {
        $this->kelasService = $kelasService;
        $this->guruService = $guruService;
        $this->siswaService = $siswaService;
        $this->mapelService = $mapelService;
        $this->jadwalPelajaranService = $jadwalPelajaranService;
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

    public function tambahMapel(Request $request)
    {
        $nama = $request->input("nama");
        if (!is_null($nama)) {
            if (is_null($this->mapelService->getByNama($nama))) {
                $mapel = new Mapel();
                $mapel->fill($request->input());
                $hasil = $this->mapelService->tambah($mapel);
                if ($hasil == 1) {
                    $icon =  "success";
                    $title = "Tambah Mata Pelajaran sukses!";
                } else if ($hasil == 0) {
                    $icon =  "warning";
                    $title = "Tambah Mata Pelajaran gagal!";
                }
                Session::flash("alert", "");
                Session::flash("icon", $icon);
                Session::flash("title", $title);
                Session::flash("text", "");
                return redirect(route("admin.data_mapel"));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Tambah Mata Pelajaran gagal");
                Session::flash("text", "Nama Mata Pelajaran Sudah Tersedia");
            }
        }

        return view("/admin.tambah_mapel");
    }

    public function tambahJadwal(Request $request)
    {
        $id_kelas = $request->input("id_kelas");
        $id_mapel = $request->input("id_mapel");
        if (!is_null($id_kelas) && !is_null($id_mapel)) {
            if (is_null($this->jadwalPelajaranService->getByKelasAndMapel($id_kelas, $id_mapel))) {
                $jadwal = new JadwalPelajaran();
                $jadwal->id_kelas = $id_kelas;
                $jadwal->id_mapel = $id_mapel;
                $jadwal->waktu = $request->input("waktu");
                $hasil = $this->jadwalPelajaranService->tambah($jadwal);
                if ($hasil != null) {
                    $icon =  "success";
                    $title = "Tambah Jadwal sukses!";
                } else if ($hasil == 0) {
                    $icon =  "warning";
                    $title = "Tambah Jadwal gagal!";
                }
                Session::flash("alert", "");
                Session::flash("icon", $icon);
                Session::flash("title", $title);
                Session::flash("text", "");
                return redirect(route("admin.detail_jadwal", ['id_kelas' => $id_kelas]));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Tambah Jadwal gagal");
                Session::flash("text", "Jawal Mata Pelajaran Sudah Tersedia");
            }
        }

        $mapels = $this->mapelService->getAll();
        return view("/admin.tambah_jadwal", ["mapels" => $mapels, "id_kelas" => $id_kelas]);
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

    public function hapusMapel(Request $request)
    {
        $id_mapel = $request->input("id_mapel");
        $hasil = $this->mapelService->delete($id_mapel);

        if ($hasil == 1) {
            $icon =  "success";
            $title = "Hapus Mata Pelajaran sukses!";
        } else if ($hasil == 0) {
            $icon =  "warning";
            $title = "Hapus Mata Pelajaran gagal!";
        }
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", "");
        return redirect(route("admin.data_mapel"), 302);
    }

    public function hapusJadwal(Request $request)
    {
        $id_jadwal = $request->input("id_jadwal");
        $id_kelas = $request->input("id_kelas");
        $hasil = $this->jadwalPelajaranService->delete($id_jadwal);

        if ($hasil == 1) {
            $icon =  "success";
            $title = "Hapus Jadwal Pelajaran sukses!";
        } else if ($hasil == 0) {
            $icon =  "warning";
            $title = "Hapus Jadwal Pelajaran gagal!";
        }
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", "");
        return redirect(route("admin.detail_jadwal", ["id_kelas" => $id_kelas]), 302);
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

    public function dataMapel()
    {
        $mapels = $this->mapelService->getAll();

        return view("/admin.data_mapel", [
            "mapels" => $mapels
        ]);
    }

    public function dataJadwal()
    {
        $kelas = $this->kelasService->getAll();

        return view("/admin.data_jadwal", [
            "kelas" => $kelas
        ]);
    }

    public function detailGuru()
    {
        return view("/admin.detail_guru");
    }

    public function detailJadwal(Request $request)
    {
        $id_kelas = $request->input("id_kelas");
        $kelas = $this->kelasService->getById($id_kelas);
        $jadwals = $this->jadwalPelajaranService->getByKelas($id_kelas);
        foreach ($jadwals as $jadwal) {
            $jadwal->nama_kelas = $this->kelasService->getById($id_kelas)->nama;
            $jadwal->nama_mapel = $this->mapelService->getById($jadwal->id_mapel)->nama;
            $jadwal->waktu = $jadwal->waktu;
        }

        return view("/admin.detail_jadwal", [
            "jadwals" => $jadwals,
            "id_kelas" => $id_kelas,
            "nama_kelas" => $kelas->nama
        ]);
    }


    public function editSiswa(Request $request)
    {
        if (!is_null($request->input("nama"))) {
            $siswa = $this->siswaService->getByNis($request->input("nis"));

            $hasil = $siswa->update([
                "nama" => $request->input("nama"),
                "alamat" => $request->input("alamat"),
                "email" => $request->input("email"),
                "id_kelas" => $request->input("id_kelas")
            ]);

            if ($hasil == 1) {
                $icon =  "success";
                $title = "Update Siswa sukses!";
            } else if ($hasil == 0) {
                $icon =  "warning";
                $title = "Update Siswa gagal!";
            }
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", "");
            return redirect(route("admin.data_siswa"), 302);
        }
        $semuaKelas = $this->kelasService->getAll();
        $siswa = $this->siswaService->getByNis($request->input("nis"));
        return view("admin.tambah_siswa", ["semuaKelas" => $semuaKelas, "siswa" => $siswa]);
    }

    public function editGuru(Request $request)
    {
        $guru = $this->guruService->getByNip($request->input("nip"));
        if (!is_null($request->input("nama"))) {


            $hasil = $guru->update([
                "nama" => $request->input("nama"),
                "alamat" => $request->input("alamat"),
                "email" => $request->input("email")
            ]);

            if ($hasil == 1) {
                $icon =  "success";
                $title = "Update Guru sukses!";
            } else if ($hasil == 0) {
                $icon =  "warning";
                $title = "Update Guru gagal!";
            }
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", "");
            return redirect(route("admin.data_guru"), 302);
        }

        return view("admin.tambah_guru", ["guru" => $guru]);
    }

    public function editKelas(Request $request)
    {
        $kelas = $this->kelasService->getById($request->input("id_kelas"));
        if (!is_null($request->input("nip"))) {
            $hasil = $kelas->update([
                "nip" => $request->input("nip")
            ]);

            if ($hasil == 1) {
                $icon =  "success";
                $title = "Update Kelas sukses!";
            } else if ($hasil == 0) {
                $icon =  "warning";
                $title = "Update Kelas gagal!";
            }
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", "");
            return redirect(route("admin.data_kelas"), 302);
        }
        $semuaGuru = $this->guruService->getAll();

        return view("admin.tambah_kelas", ["semuaGuru" => $semuaGuru, "kelas" => $kelas]);
    }

    public function editJadwal(Request $request)
    {
        $jadwal = $this->jadwalPelajaranService->getById($request->input("id_jadwal"));
        if (!is_null($request->input("waktu"))) {
            $hasil = $jadwal->update([
                "waktu" => $request->input("waktu")
            ]);

            if ($hasil == 1) {
                $icon =  "success";
                $title = "Update Jadwal sukses!";
            } else if ($hasil == 0) {
                $icon =  "warning";
                $title = "Update Jadwal gagal!";
            }
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", "");
            return redirect(route("admin.detail_jadwal", ["id_kelas" => $jadwal->id_kelas]), 302);
        }
        $semuaGuru = $this->guruService->getAll();
        $mapel = $this->mapelService->getById($jadwal->id_mapel);
        return view("admin.tambah_jadwal", ["id_kelas" => $request->input("id_kelas"), "jadwal" => $jadwal, "nama_mapel" => $mapel->nama]);
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
