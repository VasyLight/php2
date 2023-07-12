<?php

namespace App;

class Db
{
    protected $dbh;
    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql)
    {
        return $this->dbh->prepare($sql)->execute();
    }
}