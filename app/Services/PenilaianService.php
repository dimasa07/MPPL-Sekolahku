<?php

namespace App\Services;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Penilaian;
use App\Models\Siswa;
use App\Models\Tugas;

class PenilaianService
{

    public function tambah(Penilaian $penilaian)
    {
        if (!is_null($this->getByKelasDanSiswa($penilaian->kelas, $penilaian->nis))) {
            return null;
        }

        return $penilaian->save();
    }

    public function getById(string $id)
    {
        return Penilaian::where("id_penilaian", "=", $id)->first();
    }

    public function getBySiswa(Siswa $siswa)
    {
        return Penilaian::where("nis", "=", $siswa->nis)->first();
    }

    public function getByKelas(Kelas $kelas)
    {
        return Penilaian::where("kelas", "=", $kelas)->first();
    }

    public function getByKelasDanSiswa(string $kelas, string $nis)
    {
        return Penilaian::where("kelas", "=", $kelas)->where("nis", "=", $nis)->first();
    }

    public function getAll()
    {
        return Penilaian::all();
    }
}
