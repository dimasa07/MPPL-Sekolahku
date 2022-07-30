<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    use HasFactory;

    protected $table = "jadwal_pelajaran";
    protected $primaryKey = "id_jadwal";
    public $timestamps = false;

    protected $fillable = [
        "tanggal"
    ];
}
