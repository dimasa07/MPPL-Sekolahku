<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $primaryKey = "nis";
    public $timestamps = false;

    public string $statusAkun;

    protected $fillable = [
        "nis",
        "nama",
        "username",
        "password",
        "alamat",
        "id_kelas",
        "email"
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "id_kelas");
    }

    public function tugas()
    {
        return $this->belongsToMany(
            Tugas::class,
            "detail_tugas",
            "nis",
            "id_tugas"
        );
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, "nis");
    }

    public function kehadiran()
    {
        return $this->belongsToMany(
            Kehadiran::class,
            "detail_kehadiran",
            "nis",
            "id_kehadiran"
        );
    }

}
