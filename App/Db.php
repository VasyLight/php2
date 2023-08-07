<?php

namespace App;

class Db
{
    use Singleton;

    protected $dbh;
    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=app', 'root', '');
    }

    public function execute($sql, $params = [])
    {
        return $this->dbh->prepare($sql)->execute($params);
    }

    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }


}