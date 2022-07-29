<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\KelasBelajar;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("siswa")->delete();
        DB::table("guru")->delete();
        DB::table("mata_pelajaran")->delete();
        DB::table("kelas_belajar")->delete();
        DB::table("siswa_kelas")->delete();

        $siswaA = Siswa::create([
            "nama" => "Siswa A",
            "email" => "siswaa@gmail.com",
            "password" => "siswaa"
        ]);
        $siswaB = Siswa::create([
            "nama" => "Siswa B",
            "email" => "siswab@gmail.com",
            "password" => "siswab"
        ]);
        $siswaC = Siswa::create([
            "nama" => "Siswa C",
            "email" => "siswac@gmail.com",
            "password" => "siswac"
        ]);

        $guruA = Guru::create([
            "nama" => "Guru A",
            "email" => "gurua@gmail.com",
            "password" => "gurua"
        ]);
        $guruB = Guru::create([
            "nama" => "Guru B",
            "email" => "gurub@gmail.com",
            "password" => "gurub"
        ]);
        $guruC = Guru::create([
            "nama" => "Guru C",
            "email" => "guruc@gmail.com",
            "password" => "guruc"
        ]);

        $mapelA = MataPelajaran::create([
            "nama" => "Matematika",
            "kelas" => "10"
        ]);
        $mapelB = MataPelajaran::create([
            "nama" => "Matematika",
            "kelas" => "11"
        ]);
        $mapelC = MataPelajaran::create([
            "nama" => "Matematika",
            "kelas" => "12"
        ]);

        $kelasA = KelasBelajar::create([
            "nama" => "Kelas A ",
            "deskripsi" => "Guru A Matematika A",
            "id_guru" => $guruA->id,
            "id_mapel" => $mapelA->id
        ]);

        $siswaA->kelas()->attach($kelasA->id);
    }
}
