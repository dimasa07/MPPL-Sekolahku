<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    use HasFactory;

    protected $table = "jadwal_pelajaran";
    protected $primaryKey = "id_jadwal";
    public $timestamps = false;

    public string $nama_kelas;
    public string $nama_mapel;
    public Guru $guru;

    protected $fillable = [
        "waktu",
        "id_kelas",
        "id_mapel",
        "nip"
    ];

   

    public function kelas()
    {
        return $this->belongsToMany(
            Kelas::class,
            "jadwal_pelajaran",
            "id_jadwal",
            "id_kelas"
        );
    }

    public function mapel()
    {
        return $this->belongsToMany(
            Mapel::class,
            "jadwal_pelajaran",
            "id_jadwal",
            "id_mapel"
        );
    }

    public function siswa()
    {
        return $this->belongsToMany(
            Siswa::class,
            "kehadiran",
            "id_jadwal",
            "nis"
        );
    }
}
