<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = "kehadiran";
    protected $primaryKey = "id_kehadiran";
    public $timestamps = false;

    protected $fillable = [
        "tanggal"
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, "id_mapel");
    }

    public function siswa()
    {
        return $this->belongsToMany(
            Siswa::class,
            "detail_kehadiran",
            "id_kehadiran",
            "nis"
        );
    }
}
