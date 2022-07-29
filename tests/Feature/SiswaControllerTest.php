<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class SiswaControllerTest extends TestCase
{
    public function testDaftar()
    {
        $this->post("/siswa/daftar", [
            "nis" => "10119300",
            "nama" => "Agung",
            "alamat" => "Jl. Cisitu",
            "email" => "ex@gmail.com",
            "username" => "agung",
            "password" => "agung",
            "kelas" => "9A"
        ])->assertSeeText("anah");

    }
}
