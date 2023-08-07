<?php

namespace App;

class Config

{
    use Singleton;

    public const TABLE = 'config';

    public $dbname;
    public $host;



}