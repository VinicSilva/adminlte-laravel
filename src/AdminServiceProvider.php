<?php
/**
 * Created by PhpStorm.
 * User: Lucas Brito
 * Date: 20/07/2018
 * Time: 13:06
 */

namespace Lbernardo\AdminLte;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'adminlte');
        // Publish adminlte
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/adminlte'),
        ], 'public');
        // Configuration
        $this->publishes([
            __DIR__.'/config/adminlte.php' => config_path('adminlte.php'),
        ]);
    }
}