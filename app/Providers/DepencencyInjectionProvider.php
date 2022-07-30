<?php

namespace App\Providers;

use App\Services\AdminService;
use App\Services\GuruService;
use App\Services\JadwalPelajaranService;
use App\Services\KehadiranService;
use App\Services\KelasService;
use App\Services\MapelService;
use App\Services\PenilaianService;
use App\Services\SiswaService;
use App\Services\TugasService;
use Illuminate\Support\ServiceProvider;

class DepencencyInjectionProvider extends ServiceProvider
{

    public array $singletons =[
        SiswaService::class,
        AdminService::class,
        GuruService::class,
        JadwalPelajaranService::class,
        KehadiranService::class,
        KelasService::class,
        MapelService::class,
        PenilaianService::class,
        TugasService::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
