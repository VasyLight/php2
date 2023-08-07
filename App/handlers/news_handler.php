<?php

use App\Models\News;

$data = $_POST['submit'];

$news = new News();

if (isset($data['id'])) {
    $news->id = $data['id'];
}
if (isset($data['title'])) {
    $news->title = $data['title'];
}
if(isset($data['text'])) {
    $news->text = $data['text'];
}
if(isset($data['comments'])) {
    $news->comments = $data['comments'];
}

$news->save();


