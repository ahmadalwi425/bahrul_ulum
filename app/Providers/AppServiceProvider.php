<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\menu;
use App\Models\lembaga;

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
        $dataall = "data semua page";
        $datamenu = menu::with('lembaga')->get();
        $datalembaga = lembaga::get();
        View::share(compact('dataall','datamenu','datalembaga')); 
    }
}
