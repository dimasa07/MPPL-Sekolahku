<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenilaian extends Model
{
    use HasFactory;

    protected $table = "detail_penilaian";
    public $timestamps = false;

    protected $fillable = [
        "nilai"
    ];
}
