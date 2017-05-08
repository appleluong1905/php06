<?php

/**
 * Created by PhpStorm.
 * User: NAMNH
 * Date: 05/05/2017
 * Time: 11:16 CH
 */
class Connect
{
    public $conn;

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', 'none', 'mvc_oop');
        return $this->conn;
    }
    public function __construct()
    {
        $this->connect();
    }
}
