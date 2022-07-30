<?php

namespace App\Services;

use App\Models\Kehadiran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;

class KehadiranService
{

    private MapelService $mapelService;

    public function __construct(MapelService $mapelService)
    {
        $this->mapelService = $mapelService;
    }

    public function tambah(Kehadiran $kehadiran)
    {
        $mapel = $this->mapelService->getById($kehadiran->id_mapel);
        if (!is_null($mapel)) {
            return null;
        }

        return $kehadiran->save();
    }

    public function getById(string $id)
    {
        return Kehadiran::where("id_kehadiran", "=", $id)->first();
    }

    public function getByMapel(Mapel $mapel)
    {
        return Kehadiran::where("id_mapel", "=", $mapel->id_mapel)->first();
    }

    public function getAll()
    {
        return Kehadiran::all();
    }
}
