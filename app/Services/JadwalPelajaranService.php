<?php

namespace App\Services;

use App\Models\JadwalPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;

class JadwalPelajaranService
{

    public function tambah(JadwalPelajaran $jadwalPelajaran)
    {
        if (!is_null($this->getByKelasAndMapel($jadwalPelajaran->id_kelas, $jadwalPelajaran->id_mapel))) {
            return null;
        }

        return $jadwalPelajaran->save();
    }

    public function getById(string $id)
    {
        return JadwalPelajaran::where("id_jadwal", "=", $id)->first();
    }
    public function getByKelas(string $id_kelas)
    {
        return JadwalPelajaran::where("id_kelas", "=", $id_kelas)->get();
    }

    public function getByKelasAndMapel(string $id_kelas, string $id_mapel)
    {
        return JadwalPelajaran::where("id_kelas", "=", $id_kelas)->where("id_mapel", "=", $id_mapel)->first();
    }

    public function getAll()
    {
        return JadwalPelajaran::all();
    }

    public function delete(string $id)
    {
        return JadwalPelajaran::where("id_jadwal", "=", $id)->delete();
    }
}
