<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';
    public array $article;

    public function show($id)
    {
        $db = new Db();

        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id = ' . $id,
            \PDO::FETCH_ASSOC
        );

        if (false !== $res) {
            foreach ($res as $row) {
                $this->article = [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'text' => $row['text'],
                    'comments' => $row['comments']
                ];

            }
        }
    }
}