<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\JadwalPelajaran;
use App\Models\Kehadiran;
use App\Services\GuruService;
use App\Services\JadwalPelajaranService;
use App\Services\KehadiranService;
use App\Services\KelasService;
use App\Services\MapelService;
use App\Services\SiswaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{

    private GuruService $guruService;
    private SiswaService $siswaService;
    private KehadiranService $kehadiranService;
    private MapelService $mapelService;
    private KelasService $kelasService;
    private JadwalPelajaranService $jadwalService;

    public function __construct(
        GuruService $guruService,
        SiswaService $siswaService,
        KehadiranService $kehadiranService,
        KelasService $kelasService,
        MapelService $mapelService,
        JadwalPelajaranService $jadwalPelajaranService
    ) {
        $this->guruService = $guruService;
        $this->siswaService = $siswaService;
        $this->kelasService = $kelasService;
        $this->mapelService = $mapelService;
        $this->kehadiranService = $kehadiranService;
        $this->jadwalService = $jadwalPelajaranService;
    }

    public function index(Request $request)
    {
        if ($request->session()->exists("nip")) {
            $request->session()->put("nama", $this->guruService->getByNip($request->session()->get("nip"))->nama);
            return view("/guru.index");
        }
        return redirect(route("guru.login"));
    }

    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");
        if ($request->input("login") == "login") {
            $guru = Guru::where("username", "=", $username)->where("password", "=", $password)->first();
            if (!is_null($guru)) {
                $request->session()->put("nip", $guru->nip);
                return redirect(route("guru"));
            } else {
                Session::flash("alert", "");
                Session::flash("icon", "warning");
                Session::flash("title", "Login Gagal");
                Session::flash("text", "Username dan Password tidak sesuai");
            }
        }
        return view("/guru.login");
    }

    public function logout(Request $request)
    {
        $request->session()->forget("guru");
        return redirect("/");
    }

    public function daftar(Request $request)
    {
        $nip = $request->input("nip");
        $username = $request->input("username");
        $password = $request->input("password");
        $rePassword = $request->input("re-password");
        $sukses = false;
        if (isset($nip)) {
            $guru = $this->guruService->getByNip($nip);
            if (is_null($guru)) {
                $icon = "warning";
                $title = "Daftar Gagal !";
                $text = "Nomor Induk Pengajar tidak terdaftar di data admin";
            } else if ($password == $rePassword) {
                $guru->update([
                    "username" => $username,
                    "password" => $password
                ]);
                $icon = "success";
                $title = "Daftar Sukses !";
                $text = "";
                $sukses = true;
            } else {
                $icon = "warning";
                $title = "Daftar Gagal !";
                $text = "Password dan Re-Password tidak sesuai";
            }
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", $text);

            if ($sukses) {
                return redirect(route("guru.login"));
            }
        }

        return view("/guru.daftar", ["email" => "contoh@gmail.com"]);
    }

    public function jadwal(Request $request)
    {
        $jadwals = $this->jadwalService->getByGuru($request->session()->get("nip"));
        foreach ($jadwals as $jadwal) {
            $jadwal->nama_kelas = $this->kelasService->getById($jadwal->id_kelas)->nama;
            $jadwal->nama_mapel = $this->mapelService->getById($jadwal->id_mapel)->nama;
        }

        return view("guru.jadwal", [
            "jadwals" => $jadwals
        ]);
    }

    public function kehadiranSiswa(Request $request)
    {
        $jadwals = $this->jadwalService->getByGuru($request->session()->get("nip"));
        foreach ($jadwals as $jadwal) {
            $jadwal->nama_kelas = $this->kelasService->getById($jadwal->id_kelas)->nama;
            $jadwal->nama_mapel = $this->mapelService->getById($jadwal->id_mapel)->nama;
        }

        return view("guru.kehadiran_siswa", [
            "jadwals" => $jadwals
        ]);
    }

    public function detailKehadiranSiswa(Request $request)
    {
        $id_jadwal = $request->input("id_jadwal");
        $jadwal = $this->jadwalService->getById($id_jadwal);
        $nama_kelas = $this->kelasService->getById($jadwal->id_kelas)->nama;
        $nama_mapel = $this->mapelService->getById($jadwal->id_mapel)->nama;
        $request->session()->put("id_jadwal", $id_jadwal);
        $request->session()->put("nama_kelas", $nama_kelas);
        $request->session()->put("nama_mapel", $nama_mapel);


        $kehadiran = Kehadiran::select("pertemuan_ke")->where("id_jadwal", "=", $id_jadwal)->groupBy("pertemuan_ke")->get();

        return view("guru.detail_kehadiran_siswa", [
            "nama_kelas" => $nama_kelas,
            "nama_mapel" => $nama_mapel,
            "kehadiran" => $kehadiran
        ]);
    }

    public function tambahPertemuan(Request $request)
    {
        $kelas = $this->kelasService->getByNama($request->session()->get("nama_kelas"));
        $siswas = $this->siswaService->getByKelas($kelas);

        if ($request->input("tambah") == "tambah") {
            $sukses = false;
            $id_jadwal = $request->session()->get("id_jadwal");
            $pertemuan_ke = $request->input("pertemuan_ke");
            $kehadiran = Kehadiran::where("id_jadwal", "=", $id_jadwal)->where("pertemuan_ke", "=", $pertemuan_ke)->first();
            if (!is_null($kehadiran)) {
                $icon = "warning";
                $title = "Gagal tambah";
                $text = "Pertemuan telah tersedia";
            }
            foreach ($siswas as $siswa) {
                $k = new Kehadiran();
                $k->id_jadwal = $id_jadwal;
                $k->pertemuan_ke = $pertemuan_ke;
                $keterangan = explode("-", $request->input("keterangan-" . $siswa->nis));
                $k->nis = $keterangan[0];
                $k->keterangan = $keterangan[1];
                $this->kehadiranService->tambah($k);
            }
            $sukses = true;
            $icon = "success";
            $title = "Sukses tambah";
            $text = "";
            Session::flash("alert", "");
            Session::flash("icon", $icon);
            Session::flash("title", $title);
            Session::flash("text", $text);

            if ($sukses) {
                return redirect(route("guru.kehadiran_siswa.detail", ["id_jadwal" => $request->session()->get("id_jadwal")]));
            }
        }

        return view("guru.tambah_pertemuan", [
            "nama_kelas" => $request->session()->get("nama_kelas"),
            "nama_mapel" => $request->session()->get("nama_mapel"),
            "siswas" => $siswas
        ]);
    }


    public function hapusPertemuan(Request $request)
    {
        Kehadiran::where("pertemuan_ke", "=", $request->input("pertemuan_ke"))->delete();
        $icon = "success";
        $title = "Sukses hapus";
        $text = "";
        Session::flash("alert", "");
        Session::flash("icon", $icon);
        Session::flash("title", $title);
        Session::flash("text", $text);

        return redirect(route("guru.kehadiran_siswa.detail", ["id_jadwal" => $request->session()->get("id_jadwal")]));
    }

    public function lihatKehadiranSiswa(Request $request)
    {
        $kelas = $this->kelasService->getByNama($request->session()->get("nama_kelas"));
        $siswas = $this->siswaService->getByKelas($kelas);
        $pertemuan_ke = $request->input("pertemuan_ke");
        $kehadiran = [];
        foreach ($siswas as $siswa) {
            $kk = Kehadiran::where("id_jadwal", "=", $request->session()->get("id_jadwal"))
                ->where("pertemuan_ke", "=", $pertemuan_ke)
                ->where("nis", "=", $siswa->nis)->first();
            $k = [
                "nis" => "$siswa->nis",
                "nama" => $siswa->nama,
                "keterangan" => $kk->keterangan
            ];
            $kehadiran[] = $k;
        }
        return view("guru.lihat_kehadiran_siswa", [
            "nama_kelas" => $request->session()->get("nama_kelas"),
            "nama_mapel" => $request->session()->get("nama_mapel"),
            "id_jadwal" => $request->session()->get("id_jadwal"),
            "pertemuan_ke" => $pertemuan_ke,
            "kehadiran" => $kehadiran
        ]);
    }

    public function absensiSiswa(Request $request)
    {
        $nip = $request->input("nip");
        $guru = Guru::where("nip", "=", $nip)->first();
        $kelas = $guru->kelas;

        return response($kelas);
    }
}
