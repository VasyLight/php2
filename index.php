<?php


require __DIR__ . '/autoload.php';


$users = App\User::findAll();

var_dump($users);