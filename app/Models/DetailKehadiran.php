<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKehadiran extends Model
{
    use HasFactory;

    protected $table = "detail_kehadiran";
    public $timestamps = false;

    protected $fillable = [
        "keterangan"
    ];
}
