<?php

namespace AGHQ\RservePHPLaravel\Providers;
use Illuminate\Support\ServiceProvider;

class RservePHPLaravelPublishProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {}

    public function boot() {
        $this->publishes([
            __DIR__ . '/../../config/rserve.php'  => config_path('rserve.php'),
        ]);
    }
}
