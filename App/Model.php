<?php

namespace App;

abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            [],
            static::class
        );
    }

    public static function findById($id)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id= :id',
            [':id' => $id ],
            static::class
        )[0];
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];

        foreach ($this as $k => $v)
            {
                if('id' === $k) {
                    continue;
                }
                $columns[] = $k;
                $values[':'.$k] = $v;
            }


        $sql = 'INSERT INTO ' . static::TABLE . '
         ('. implode(',', $columns) . ')
         VALUES
         ('. implode(',', array_keys($values)) . ')
         ';


        $db = DB::instance();
        $db->execute($sql, $values);

        $sql_id = 'SELECT id   
        FROM ' . static::TABLE . ' 
        ORDER BY id DESC 
        LIMIT 1';


        $this->id = $db->query($sql_id, \PDO::FETCH_ASSOC)[0]['id'];
        var_dump($this->id);
    }

    public function update()
    {
        $s = [];

        foreach ($this as $k => $v)
        {
            if('id' === $k)
            {
                continue;
            }

            $s[] = $k . '=' . "'" . $v . "'";
        }
        $id = $this->id;

        $sql = 'UPDATE ' . static::TABLE . '
         SET '. implode(',', $s) . '
         WHERE id = '. $id;

        $db = DB::instance();
        $db->execute($sql);

    }

    public function save()
    {
        if (!$this->isNew()) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM ' . static::TABLE . '
         WHERE id = '. $id;

        $db = DB::instance();
        $db->execute($sql);
        echo 'SUCCESS!';
    }
}