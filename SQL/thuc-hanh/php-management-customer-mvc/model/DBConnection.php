<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:49
 */

namespace Model;

use PDO;

class DBConnection
{
    public $dsn;
    public $user;
    public $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect()
    {
        return new PDO($this->dsn, $this->user, $this->password);
    }
}