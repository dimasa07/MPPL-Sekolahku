<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        return view("/guru.index");
    }

    public function login(){
        return view("/guru.login");
    }

    public function daftar(){
        return view("/guru.daftar");
    }

    public function tambahMateri(){
        return view("/guru.tambah_materi");
    }

    public function logout(){
        
    }
}
