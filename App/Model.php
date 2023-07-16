<?php

namespace App;

abstract class Model
{

    public const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id = ' . $id,
            static::class
        );

        if (false !== $res)
        {
            return $res;
        }
        return false;
    }
}