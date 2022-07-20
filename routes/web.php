<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view("/beranda", ["email" => "contoh@gmail.com"]);
})->name("beranda");

Route::get('/tentang', function () {
    return view("/tentang", ["email" => "contoh@gmail.com"]);
})->name("tentang");

Route::get('/pelajaran/materi', function () {
    return view("/");
})->name("pelajaran.materi");

Route::get('/pelajaran', function () {
    return view("/pelajaran", ["email" => "contoh@gmail.com"]);
})->name("pelajaran");

// GURU
Route::get('/guru/login', function () {
    return view("/guru.login");
})->name("guru.login");

Route::get('/guru', function () {
    return view("/guru.index");
})->name("guru");

Route::get('/guru/daftar', function () {
    return view("/guru.daftar");
})->name("guru.daftar");
Route::get('/guru/tambah-materi', function () {
    return view("/guru.tambah_materi");
})->name("guru.tambah_materi");
Route::get('/guru/logout', function () {
})->name("guru.logout");

Route::get('login/validasilogin', function () {
    return view("/");
})->name("login.validasilogin");


// SISWA
Route::get('/siswa', function () {
    return view("/siswa.index");
})->name("siswa");
Route::get('/siswa/daftar', function () {
    return view("/siswa.daftar",["email" => "contoh@gmail.com"]);
})->name("siswa.daftar");
Route::get('/siswa/daftar/submit', function () {
})->name("siswa.daftar.submit");
Route::get('/siswa/kelas10', function () {
})->name("siswa.kelas10");
Route::get('/siswa/kelas11', function () {
})->name("siswa.kelas11");
Route::get('/siswa/kelas12', function () {
})->name("siswa.kelas12");
Route::get('/siswa/logout', function () {
    return view("/siswa.index");
})->name("siswa.logout");


// ADMIN
Route::get('/admin', function () {
    return view("/admin.index");
})->name("admin");
Route::get('/admin/login', function () {
    return view("/admin.login");
})->name("admin.login");
Route::get('/admin/logout', function () {
})->name("admin.logout");
Route::get('/admin/data-siswa', function () {
    return view("/admin.data_siswa");
})->name("admin.data_siswa");
Route::get('/admin/detail-siswa', function () {
    return view("/admin.detail_siswa");
})->name("admin.detail_siswa");
Route::get('/admin/update-siswa', function () {
    return view("/admin.update_siswa");
})->name("admin.update_siswa");
Route::get('/admin/data-guru', function () {
    return view("/admin.data_guru");
})->name("admin.data_guru");
Route::get('/admin/detail-guru', function () {
    return view("/admin.detail_guru");
})->name("admin.detail_guru");
Route::get('/admin/update-guru', function () {
    return view("/admin.update_guru");
})->name("admin.update_guru");
Route::get('/admin/tambah-guru', function () {
    return redirect("/guru/daftar");
})->name("admin.tambah_guru");
Route::get('/admin/data-materi', function () {
    return view("/admin.data_materi");
})->name("admin.data_materi");
Route::get('/admin/tambah-materi', function () {
    return view("/admin.tambah_materi");
})->name("admin.tambah_materi");
Route::get('/admin/update-materi', function () {
    return view("/admin.update_materi");
})->name("admin.update_materi");
Route::get('/admin/tentang-pengembang', function () {
})->name("admin.tentang_pengembang");
Route::get('/admin/tentang-website', function () {
})->name("admin.tentang_website");
Route::get('/admin/siswa_edit', function () {
})->name("admin.siswa_edit");