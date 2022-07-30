<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTugas extends Model
{
    use HasFactory;

    protected $table = "detail_tugas";
    public $timestamps = false;

    protected $fillable = [
        "submit"
    ];
}
