<?php

namespace App\model;
use App\model\Database as ModelDatabase;
use App\model\Livre;
use PDO;

class LivreManager
{
    private PDO $db;

    public function __construct()
    {
        $this->db = ModelDatabase::getInstance()->getPDO();
    }

    public function getAllLivres()
    {
        $query = $this->db->query("SELECT * FROM livres");
        $all = $query->fetchAll(PDO::FETCH_CLASS, Livre::class);
        return $all;
    }
}
