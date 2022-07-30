<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = "tugas";
    protected $primaryKey = "id_tugas";
    public $timestamps = false;

    protected $fillable = [
        "materi",
        "rincian",
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
            "detail_tugas",
            "id_tugas",
            "nis"
        );
    }
}
