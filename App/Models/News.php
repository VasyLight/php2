<?php

namespace App\Models;

use App\Db;
use App\Model;

class News extends Model
{
    public const TABLE = 'news';

    public function findLastNews($amount): array
    {
        $db  = new Db();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $amount,
            \PDO::FETCH_ASSOC
        );

        if (false !== $res)
        {
           foreach ($res as $v) {

               echo '<tr>';
                   echo '<td>' . $v['id'] . '</td>';
                   echo '<td>' . $v['title'] . '</td>';
                   echo '<td>' . $v['text'] . '</td>';
                   echo '<td>' . $v['comments'] . '</td>';
                   echo '<td><a type="button" class="btn btn-secondary" href="article.php?id=' . $v['id'] .'">' . 'статья' . '</a></td>';
               echo '</tr>';

           }

        }

        return [];
    }
}