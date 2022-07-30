<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $primaryKey = "id_kelas";
    public $timestamps = false;

    protected $fillable = [
        "id_kelas",
        "nama",
        "nip"
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, "id_kelas");
    }

    public function mapel()
    {
        return $this->belongsToMany(
            Mapel::class,
            "jadwal_pelajaran",
            "id_kelas",
            "id_mapel"
        );
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, "nip");
    }
}
