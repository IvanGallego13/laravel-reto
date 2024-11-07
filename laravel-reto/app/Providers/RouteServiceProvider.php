<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for your application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes(); // Carga las rutas de la API
        $this->mapWebRoutes();  // Carga las rutas web
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are loaded by the RouteServiceProvider within a group which
     * is assigned the "api" middleware group. Enjoy building your API!
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::middleware('api') // Usa el middleware 'api'
            ->prefix('api') // Agrega el prefijo 'api'
            ->group(base_path('routes/api.php')); // Carga las rutas desde routes/api.php
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes are loaded by the RouteServiceProvider within a group which
     * is assigned the "web" middleware group. Feel free to add web routes here.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web') // Usa el middleware 'web'
            ->group(base_path('routes/web.php')); // Carga las rutas desde routes/web.php
    }
}
