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
        "id_jadwal",
        "pertemuan_ke",
        "keterangan",
        "nis"
    ];

}
