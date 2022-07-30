<?php

namespace App\Services;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Tugas;

class TugasService
{

    private MapelService $mapelService;

    public function __construct(MapelService $mapelService)
    {
        $this->mapelService = $mapelService;
    }

    public function tambah(Tugas $tugas)
    {
        if (!is_null($this->getByMateri($tugas->materi)) && !is_null($this->mapelService->getById($tugas->id_mapel))) {
            return null;
        }

        return $tugas->save();
    }

    public function getById(string $id)
    {
        return Tugas::where("id_tugas", "=", $id)->first();
    }

    public function getByMapel(Mapel $mapel)
    {
        return Tugas::where("id_mapel", "=", $mapel->id_mapel)->get();
    }

    public function getByMateri(string $materi)
    {
        return Tugas::where("materi", "=", $materi)->first();
    }

    public function getAll()
    {
        return Tugas::all();
    }
}
