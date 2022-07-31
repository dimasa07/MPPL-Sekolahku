<?php

namespace App\Services;

use App\Models\Guru;

class GuruService
{

    public function tambah(Guru $guru)
    {
        if (!is_null($this->getByNip($guru->nip))) {
            return null;
        }
        return $guru->save();
    }

    public function getAll()
    {
        return Guru::all();
    }

    public function getByNip(string $nip)
    {
        return Guru::where("nip", "=", $nip)->first();
    }

    public function getByNama(string $nama)
    {
        return Guru::where("nama", "LIKE", "%" . $nama . "%")->get();
    }

    public function delete(string $nip)
    {
        return Guru::where("nip", "=", $nip)->delete();
    }
}
