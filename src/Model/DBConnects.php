<?php


namespace App\Model;
use PDO;

class DBConnects
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=library_manager;charset=utf8';
        $this->user = 'root';
        $this->password = 'Minh3032001@';
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->user, $this->password);
            return $conn;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

}