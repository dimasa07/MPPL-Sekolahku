<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "guru";
    protected $primaryKey = "nip";

    protected $fillable = [
        "nip",
        "nama",
        "username",
        "password"
    ];

    /*
    public function mapel(){
        return $this->belongsToMany(
            MataPelajaran::class,
            "kelas_belajar",
            "id_guru",
            "id_mapel"
        );
    }*/
}
