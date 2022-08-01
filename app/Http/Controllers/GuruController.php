<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Services\GuruService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{

    private GuruService $guruService;

    public function __construct(GuruService $guruService)
    {
        $this->guruService = $guruService;
    }

    public function index(Request $request)
    {
        if ($request->session()->exists("guru")) {
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
                $request->session()->put("guru", $guru->nip);
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

    public function tambahMateri()
    {
        return view("/guru.tambah_materi");
    }

    public function absensiSiswa(Request $request)
    {
        $nip = $request->input("nip");
        $guru = Guru::where("nip", "=", $nip)->first();
        $kelas = $guru->kelas;

        return response($kelas);
    }
}
