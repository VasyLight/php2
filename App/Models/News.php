<?php

namespace App\Models;

use App\Db;
use App\Magic;
use App\Model;

class News extends Model
{
    public const TABLE = 'news';

    public $id;
    public $title;
    public $lead;
    public $author_id;


    public function findLastNews($amount): array
    {
        $db  = Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $amount,
            \PDO::FETCH_ASSOC
        );

        if (false !== $res)
        {
           foreach ($res as $v) {
               echo '<tr>';
               echo '<td xmlns="http://www.w3.org/1999/html">' .

               '<div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Действия
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">'. $v['id'] .'</a></li>
                    <li><a class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal'. $v['id'] .'"" href="#">Редактировать</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Удалить</a></li>
                    </ul>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal'. $v['id'] .'" tabindex="-1" aria-labelledby="exampleModalLabel'. $v['id'] .'" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form method="post" id="edit_form">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование новости</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                  <input type="text" class="form-control" id="title" value="' . $v['title'] . '">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                                  <textarea class="form-control" id="text" rows="3">' . $v['text'] . '</textarea>
                                </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Comment</label>
                                  <input type="text" class="form-control" id="comments" value="' . $v['comments'] . '">
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>'
                    .
                    '</td>';
                   echo '<td>' . $v['title'] . '</td>';
                   echo '<td>' . $v['text'] . '</td>';
                   echo '<td>' . $v['comments'] . '</td>';
                   echo '<td><a type="button" class="btn btn-secondary" href="article.php?id=' . $v['id'] .'">' . 'статья' . '</a></td>';
               echo '</tr>';

           }

        }

        return [];
    }


    use Magic;

    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return NULL;
        }
    }


}