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

    protected $fillable = [
        "waktu"
    ];
}
