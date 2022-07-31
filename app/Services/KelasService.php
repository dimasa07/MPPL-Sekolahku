<?php

namespace App\Services;

use App\Models\Guru;
use App\Models\Kelas;

class KelasService
{

    public function tambah(Kelas $kelas)
    {
        if (!is_null($this->getByNama($kelas->nama))) {
            return null;
        }
        return $kelas->save();
    }

    public function getByNama(string $nama)
    {
        return Kelas::where("nama", "=", $nama)->first();
    }

    public function getById(int $id)
    {
        return Kelas::where("id_kelas", "=", $id)->first();
    }

    public function getAll()
    {
        return Kelas::all();
    }

    public function getByWali(Guru $guru)
    {
        return Kelas::where("nip", "=", $guru->nip)->first();
    }

    public function delete(string $nip)
    {
        return Kelas::where("id_kelas", "=", $nip)->delete();
    }
}
