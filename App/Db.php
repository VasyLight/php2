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

    public function query($sql, $mode)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        if (false !== $res) {
            return $sth->fetchAll($mode);
        }
        return [];
    }


}