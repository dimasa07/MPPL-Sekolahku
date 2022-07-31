<?php

namespace App\Services;

use App\Models\Kelas;
use App\Models\Siswa;

class SiswaService
{

    public function tambah(Siswa $siswa)
    {
        if (!is_null($this->getByNis($siswa->nis))) {
            return null;
        }
        return $siswa->save();
    }

    public function getByNis(string $nis)
    {
        return Siswa::where("nis", "=", $nis)->first();
    }

    public function getByNama(string $nama)
    {
        return Siswa::where("nama", "LIKE", "%" . $nama . "%")->get();
    }

    public function getByKelas(Kelas $kelas)
    {
        return Siswa::where("id_kelas", "=", $kelas->id_kelas)->get();
    }

    public function getAll()
    {
        return Siswa::all();
    }

    public function update(Siswa $siswa){
        return $siswa->update();
    }

    public function delete(string $nis)
    {
        return Siswa::where("nis", "=", $nis)->delete();
    }
}
