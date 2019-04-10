<?php

namespace AGHQ\RservePHPLaravel;

use Illuminate\Support\ServiceProvider;
use Sentiweb\Rserve\Connection;

class RservePHPLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RservePHPLaravel::class, function() {
            // @FIXME: hook up to an actual config
            $username = "rserve";
            $password = "rserve";
            $host = "rserve";
            $port = 6311;

            // @FIXME: not sure this is something we want to do on boot; refactor to make it only
            // happen when R-related functionality is needed?
            $connection = new Connection($host,
                $port,
                [
                    'username' => $username,
                    'password' => $password,
                ]);

            return new RservePHPLaravel($connection);
        });

        $this->app->alias(RservePHPLaravel::class, 'rserve-php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $something = true;
    }
}
