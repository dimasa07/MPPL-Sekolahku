<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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

    public function tambahGuru()
    {
        return redirect("/guru/daftar");
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
}
