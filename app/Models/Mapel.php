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

}
