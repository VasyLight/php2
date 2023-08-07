<?php
require __DIR__ . '/autoload.php';


$view = new \App\View();
$view->title = 'Приложение новостей';
$view->header = 'Админка приложения';
$view->users = \App\Models\User::findAll();


$view->display(__DIR__ . '/App/templates/admin.php');