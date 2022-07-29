<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Models\JadwalPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// BERANDA
Route::controller(BerandaController::class)->group(function () {
    Route::get('/', "beranda")->name("beranda");
    Route::get('/tentang', "tentang")->name("tentang");
    Route::get('/pelajaran', "pelajaran")->name("pelajaran");
});


// GURU
Route::prefix("/guru")->controller(GuruController::class)->group(function () {
    Route::get('/', "index")->name("guru");
    Route::get('/login', "login")->name("guru.login");
    Route::get('/daftar', "daftar")->name("guru.daftar");
    Route::get('/tambah-materi', "tambahMateri")->name("guru.tambah_materi");
    Route::get('/logout', "logout")->name("guru.logout");
});


// SISWA
Route::prefix("/siswa")->controller(SiswaController::class)->group(function () {
    Route::get('/', "index")->name("siswa");
    Route::post("/login", "login")->name("siswa.login");
    Route::post('/daftar', "daftar")->name("siswa.daftar");
    Route::get('/daftar/submit', "submitPendaftaran")->name("siswa.daftar.submit");
    Route::get('/kelas10', "kelas10")->name("siswa.kelas10");
    Route::get('/kelas11', "kelas11")->name("siswa.kelas11");
    Route::get('/kelas12', "kelas12")->name("siswa.kelas12");
    Route::get('/logout', "logout")->name("siswa.logout");
});


// ADMIN
Route::prefix("/admin")->controller(AdminController::class)->group(function () {
    Route::get('/', "index")->name("admin");
    Route::get('/login', "login")->name("admin.login");
    Route::get('/logout', "logout")->name("admin.logout");
    Route::get('/data-siswa', "dataSiswa")->name("admin.data_siswa");
    Route::get('/detail-siswa', "detailSiswa")->name("admin.detail_siswa");
    Route::get('/update-siswa', "updateSiswa")->name("admin.update_siswa");
    Route::get('/data-guru', "dataGuru")->name("admin.data_guru");
    Route::get('/detail-guru', "detailGuru")->name("admin.detail_guru");
    Route::get('/update-guru', "updateGuru")->name("admin.update_guru");
    Route::get('/tambah-guru', "tambahGuru")->name("admin.tambah_guru");
    Route::get('/data-materi', "dataMateri")->name("admin.data_materi");
    Route::get('/tambah-materi', "tambahMateri")->name("admin.tambah_materi");
    Route::get('/update-materi', "updateMateri")->name("admin.update_materi");
    Route::get('/siswa_edit', "editSiswa")->name("admin.siswa_edit");
});



// AUTH
Route::get('login/validasilogin', function () {
})->name("login.validasilogin");


// TESTING
// One-to-many
Route::get("/relasi-1", function () {
    $siswa = Siswa::where("nis", "=", "10119306")->first();
    return $siswa->kelas->nama;
});
Route::get("/relasi-2", function () {
    $kelas = Kelas::where("nama", "=", "9A")->first();
    foreach ($kelas->siswa as $siswa) {
        echo '<li>Nama : ' . $siswa->nama . " <strong>" . $siswa->nis . "</strong></li>";
    }
});

// Many-to-many
Route::get("/relasi-3", function () {
    $jadwals = JadwalPelajaran::where("id_kelas", "=", 1)->get();
    foreach ($jadwals as $jadwal) {
        $kelas = Kelas::where("id_kelas", "=", $jadwal->id_kelas)->first();
        $mapel = Mapel::where("id_mapel", "=", $jadwal->id_mapel)->first();
        echo '<li>Nama : ' . $kelas->id_kelas . ", Mapel : " . $mapel->nama . ", <strong>" . $jadwal->tanggal . "</strong></li>";
    }
});
