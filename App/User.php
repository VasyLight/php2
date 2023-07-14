<?php

namespace App;

class User
{

    public $email;
    public $name;

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM users',
            'App\User'
        );
    }
}