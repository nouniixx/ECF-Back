<?php
namespace Model;
use PDO;

class Database{
    private static ?Database $instance = null;
    private PDO $pdo;

    private function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=bibliotheque;host=localhost;port=3306;charset=UTF8", "root", "");
    }

    public static function getInstance(): Database
    {
       if (self::$instance == null) {
         self::$instance = new Database();
       }

       return self::$instance;
    }

    public function getPDO(): \PDO
    {
        return $this->pdo;
    }
}