<?php

namespace AGHQ\RservePHPLaravel\Providers;

use AGHQ\RservePHPLaravel\RservePHPLaravel;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Sentiweb\Rserve\Connection;

class RservePHPLaravelServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RservePHPLaravel::class, function() {
            $username = config('rserve.user' , "rserve");
            $password = config('rserve.pass' , "rserve");
            $host = config('rserve.host' , "rserve");
            $port = config('rserve.port' , 6311);
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

    public function provides()
    {
        return [RservePHPLaravel::class];
    }
}
