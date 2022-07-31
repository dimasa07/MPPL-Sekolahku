<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "guru";
    protected $primaryKey = "nip";
    public $timestamps = false;
    public string $statusAkun = "";

    protected $fillable = [
        "nip",
        "nama",
        "alamat",
        "email",
        "username",
        "password"
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, "nip");
    }
}
