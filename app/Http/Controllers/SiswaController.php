<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Services\KelasService;
use App\Services\SiswaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        if ($request->session()->exists("nis")) {
            return view("/siswa.index");
        }
        return redirect("/");
    }

    public function daftar(Request $request)
    {
        $nis = $request->input("nis");
        $username = $request->input("username");
        $password = $request->input("password");
        $rePassword = $request->input("re-password");
        $sukses = false;
        if (isset($nis)) {
            $siswa = $this->siswaService->getByNis($nis);
            if (is_null($siswa)) {
                $icon = "warning";
                $title = "Daftar Gagal !";
                $text = "Nomor Induk Siswa tidak terdaftar di data admin";
            } else if ($password == $rePassword) {
                $siswa->update([
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
                return redirect("/");
            }
        }

        return view("/siswa.daftar", ["email" => "contoh@gmail.com"]);
    }

    public function submitPendaftaran(Request $request)
    {
    }

    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        $siswa = Siswa::where("username", "=", $username)->Where("password", "=", $password)->first();
        
        if (!is_null($siswa)) {
            $request->session()->put("nis", $siswa->nis);
            return redirect("siswa");
        } else {
            Session::flash("alert", "");
            Session::flash("icon", "warning");
            Session::flash("title", "Login Gagal");
            Session::flash("text", "Username dan Password salah");
            return redirect("/");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget("nis");
        return redirect("/");
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
