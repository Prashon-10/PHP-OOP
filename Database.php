<?php
class Database
{
    public $conn;
    private $host = "mysql:host=localhost;dbname=bookstore";
    private $user = "root";
    private $pass = "";

    public function __construct()
    {
        $this->conn = new PDO($this->host, $this->user, $this->pass);
        var_dump($this->conn);
    }
}
$obj = new Database();