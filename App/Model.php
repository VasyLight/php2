<?php

namespace App;

class Model
{

    public const TABLE = '1';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );


    }
}