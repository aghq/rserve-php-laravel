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
        $this->connection = $connection;
    }

    public function execute($rString) {
        // @TODO: consider forking the Rserve lib and apply contract(s)
        // We have no guarantee that the Connection would implement this method.
        return $this->connection->evalString($rString);
    }
}
