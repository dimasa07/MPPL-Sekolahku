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

        return $kehadiran->save();
    }

    public function getById(string $id)
    {
        return Kehadiran::where("id_kehadiran", "=", $id)->first();
    }

    public function getByJadwal(string $id_jadwal)
    {
        return Kehadiran::where("id_jadwal", "=", $id_jadwal)->get();
    }

    public function getAll()
    {
        return Kehadiran::all();
    }
}
