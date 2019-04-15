<?php

namespace AGHQ\RservePHPLaravel;


use Sentiweb\Rserve\Connection;

class RservePHPLaravel
{
    private $connection;
    private $username;
    private $password;
    private $config;

    public function __construct(Connection $connection)
    {
        $this->config = config('rserve-php-laravel.config'); // or something
        $this->connection = $connection;
    }

    public function execute($rString) {
        return $this->connection->evalString($rString);
    }
}
