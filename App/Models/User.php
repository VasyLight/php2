<?php

namespace App\Models;

use App\Model;

class User extends Model
        implements HasEmail
{
    public const TABLE = 'users';

    public $email;
    public $name;

    public function getEmail()
    {
        return $this->email;
    }

}