<?php

namespace App\Services;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;

class MapelService
{

    public function tambah(Mapel $mapel)
    {
        if (!is_null($this->getByNama($mapel->nama))) {
            return null;
        }

        return $mapel->save();
    }

    public function getByNama(string $nama)
    {
        return Mapel::where("nama", "=", $nama)->first();
    }

    public function getById(int $id)
    {
        return Mapel::where("id_mapel", "=", $id)->first();
    }

    public function getAll()
    {
        return Mapel::all();
    }

    

}
