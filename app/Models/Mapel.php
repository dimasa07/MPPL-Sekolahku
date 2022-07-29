<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = "mapel";
    protected $primaryKey = "id_mapel";

    protected $fillable = [
        "nama"
    ];

    public function kelas()
    {
        return $this->belongsToMany(
            Kelas::class,
            "jadwal_pelajaran",
            "id_mapel",
            "id_kelas"
        );
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class, "id_mapel");
    }

    public function penilaian()
    {
        return $this->belongsToMany(
            Penilaian::class,
            "detail_penilaian",
            "id_mapel",
            "id_penilaian"
        );
    }

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class,"id_mapel");
    }

}
