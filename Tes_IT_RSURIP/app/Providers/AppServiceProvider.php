<?php

namespace App\Providers;

use App\Karyawan as AppKaryawan;
use App\Models\Karyawan;
use App\Observers\KaryawanObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        AppKaryawan::observe(KaryawanObserver::class);
    }
}
