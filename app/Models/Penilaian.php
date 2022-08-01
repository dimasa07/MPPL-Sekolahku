<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = "penilaian";
    protected $primaryKey = "id_penilaian";
    public $timestamps = false;


    public function siswa()
    {
        return $this->belongsTo(Siswa::class, "nis");
    }

    public function mapel()
    {
        return $this->belongsToMany(
            Mapel::class,
            "detail_penilaian",
            "id_penilaian",
            "id_mapel"
        );
    }

    

}
