<?php

namespace App\model;
use App\model\Database as ModelDatabase;
use App\model\Livre;
use App\model\Auteur;
use App\model\Categorie;
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
        $query = $this->db->query("SELECT * FROM livres LEFT JOIN categories ON livres.categorie_id = 
        categories.id LEFT JOIN auteurs ON livres.auteur_id = auteurs.id");
        $all = $query->fetchAll(PDO::FETCH_ASSOC);
        return $all;
    }

    
}
