<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $primaryKey = "id_kelas";

    protected $fillable = [
        "nama"
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, "id_kelas");
    }

    /*public function siswa(){
        return $this->belongsToMany(
            MataPelajaran::class,
            "siswa_kelas",
            "id_kelas",
            "id_siswa"
        );
    }

    public function mapel(){
        return $this->belongsToMany(
            MataPelajaran::class,
            "kelas_belajar",
            "id_guru",
            "id_mapel"
        );
    }

    public function guru(){
        return $this->belongsToMany(
            MataPelajaran::class,
            "kelas_belajar",
            "id_mapel",
            "id_guru"
        );
    }*/
}
