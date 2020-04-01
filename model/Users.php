<?php namespace Model; use PDO;
class Users{
    public function __construct($database)
    {
        $this->db = $database;
    }

}