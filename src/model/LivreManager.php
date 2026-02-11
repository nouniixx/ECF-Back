<?php

namespace App\model;

use App\model\Database as ModelDatabase;

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
        $query = $this->db->query(
        "SELECT 
            livres.id,
            livres.titre,
            livres.synopsis,
            livres.annee_publication,

            auteurs.prenom AS auteur_prenom,
            auteurs.nom AS auteur_nom,
            categories.nom AS categorie_nom

            FROM livres LEFT JOIN categories ON livres.categorie_id = 
            categories.id LEFT JOIN auteurs ON livres.auteur_id = auteurs.id
        ");
        $all = $query->fetchAll(PDO::FETCH_ASSOC);
        return $all;
    }
}
