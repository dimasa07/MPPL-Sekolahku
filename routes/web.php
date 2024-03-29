<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\JadwalPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
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
Route::get('/guru/login', [GuruController::class, "login"])->name("guru.login");
Route::post('/guru/login', [GuruController::class, "login"])->name("guru.login");
Route::get('/guru/daftar', [GuruController::class, "daftar"])->name("guru.daftar");
Route::post('/guru/daftar', [GuruController::class, "daftar"])->name("guru0.daftar");
Route::prefix("/guru")->controller(GuruController::class)->middleware("guru")->group(function () {
    Route::get('/', "index")->name("guru");
    Route::get('/tambah-materi', "tambahMateri")->name("guru.tambah_materi");
    Route::get('/detail-kelas', "detailKelas")->name("guru.detail_kelas");
    Route::get('/jadwal', "jadwal")->name("guru.jadwal");
    Route::get('/kehadiran-siswa', "kehadiranSiswa")->name("guru.kehadiran_siswa");
    Route::get('/kehadiran-siswa/detail', "detailKehadiranSiswa")->name("guru.kehadiran_siswa.detail");
    Route::get('/kehadiran-siswa/lihat', "lihatKehadiranSiswa")->name("guru.kehadiran_siswa.lihat");
    Route::get('/kehadiran-siswa/tambah-pertemuan', "tambahPertemuan")->name("guru.kehadiran.tambah_pertemuan");
    Route::post('/kehadiran-siswa/tambah-pertemuan', "tambahPertemuan")->name("guru.kehadiran.tambah_pertemuan");
    Route::get('/kehadiran-siswa/hapus-pertemuan', "hapusPertemuan")->name("guru.kehadiran_siswa.hapus");
    Route::get('/absensi-siswa', "absensiSiswa")->name("guru.absensi_siswa");
    Route::get('/logout', "logout")->name("guru.logout");
});


// SISWA
Route::get('/siswa/daftar', [SiswaController::class, "daftar"])->name("siswa.daftar");
Route::post('/siswa/daftar', [SiswaController::class, "daftar"])->name("siswa.daftar");
Route::post("/siswa/login", [SiswaController::class, "login"])->name("siswa.login");
Route::prefix("/siswa")->controller(SiswaController::class)->middleware('siswa')->group(function () {
    Route::get('/', "index")->name("siswa");
    Route::get('/daftar/submit', "submitPendaftaran")->name("siswa.daftar.submit");
    Route::get('/kelas10', "kelas10")->name("siswa.kelas10");
    Route::get('/kelas11', "kelas11")->name("siswa.kelas11");
    Route::get('/kelas12', "kelas12")->name("siswa.kelas12");
    Route::get('/logout', "logout")->name("siswa.logout");
    Route::get('/test', "test")->name("siswa.test");
});


// ADMIN
Route::get('/admin/login', [AdminController::class, "login"])->name("admin.login");
Route::post('/admin/login', [AdminController::class, "login"])->name("admin.login");
Route::prefix("/admin")->controller(AdminController::class)->middleware('admin')->group(function () {
    Route::get('/', "index")->name("admin");
    Route::get('/logout', "logout")->name("admin.logout");
    // Siswa
    Route::get('/data-siswa', "dataSiswa")->name("admin.data_siswa");
    Route::get('/tambah-siswa', "tambahSiswa")->name("admin.tambah_siswa");
    Route::post('/tambah-siswa', "tambahSiswa")->name("admin.tambah_siswa");
    Route::get('/detail-siswa', "detailSiswa")->name("admin.detail_siswa");
    Route::get('/edit-siswa', "editSiswa")->name("admin.edit_siswa");
    Route::post('/edit-siswa', "editSiswa")->name("admin.edit_siswa");
    Route::get('/hapus-siswa', "hapusSiswa")->name("admin.hapus_siswa");
    // Guru
    Route::get('/data-guru', "dataGuru")->name("admin.data_guru");
    Route::get('/detail-guru', "detailGuru")->name("admin.detail_guru");
    Route::get('/tambah-guru', "tambahGuru")->name("admin.tambah_guru");
    Route::post('/tambah-guru', "tambahGuru")->name("admin.tambah_guru");
    Route::get('/edit-guru', "editGuru")->name("admin.edit_guru");
    Route::post('/edit-guru', "editGuru")->name("admin.edit_guru");
    Route::get('/hapus-guru', "hapusGuru")->name("admin.hapus_guru");
    // Kelas
    Route::get('/data-kelas', "dataKelas")->name("admin.data_kelas");
    Route::get('/detail-kelas', "detailKelas")->name("admin.detail_kelas");
    Route::get('/tambah-kelas', "tambahKelas")->name("admin.tambah_kelas");
    Route::post('/tambah-kelas', "tambahKelas")->name("admin.tambah_kelas");
    Route::get('/edit-kelas', "editKelas")->name("admin.edit_kelas");
    Route::post('/edit-kelas', "editKelas")->name("admin.edit_kelas");
    Route::get('/hapus-kelas', "hapusKelas")->name("admin.hapus_kelas");
    // Mapel
    Route::get('/data-mapel', "dataMapel")->name("admin.data_mapel");
    Route::get('/tambah-mapel', "tambahMapel")->name("admin.tambah_mapel");
    Route::post('/tambah-mapel', "tambahMapel")->name("admin.tambah_mapel");
    Route::get('/edit-mapel', "editMapel")->name("admin.edit_mapel");
    Route::get('/hapus-mapel', "hapusMapel")->name("admin.hapus_mapel");
    // Materi
    Route::get('/data-materi', "dataMateri")->name("admin.data_materi");
    Route::get('/tambah-materi', "tambahMateri")->name("admin.tambah_materi");
    Route::get('/update-materi', "updateMateri")->name("admin.update_materi");
    // Jadwal
    Route::get('/data-jadwal', "dataJadwal")->name("admin.data_jadwal");
    Route::get('/detail-jadwal', "detailJadwal")->name("admin.detail_jadwal");
    Route::get('/tambah-jadwal', "tambahJadwal")->name("admin.tambah_jadwal");
    Route::post('/tambah-jadwal', "tambahJadwal")->name("admin.tambah_jadwal");
    Route::get('/edit-jadwal', "editJadwal")->name("admin.edit_jadwal");
    Route::post('/edit-jadwal', "editJadwal")->name("admin.edit_jadwal");
    Route::get('/hapus-jadwal', "hapusJadwal")->name("admin.hapus_jadwal");

    Route::get('/test', "test")->name("admin.test");
    Route::post('/test', "test")->name("admin.test");
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
