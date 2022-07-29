<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $primaryKey = "nis";

    protected $fillable = [
        "nis",
        "nama",
        "username",
        "password"
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "id_kelas");
    }

    /*
    public function kelas(){
        return $this->belongsToMany(
            MataPelajaran::class,
            "siswa_kelas",
            "id_siswa",
            "id_kelas"
        );
    }*/
}
