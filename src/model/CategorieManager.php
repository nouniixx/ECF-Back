<?php

namespace App\model;
use App\model\Database as ModelDatabase;
use App\model\Categorie;
use PDO;

class CategorieManager{
    private PDO $db;

    public function __construct()
    {
        $this->db = ModelDatabase::getInstance()->getPDO();
    }

    public function getAllCategories()
    {
        $query = $this->db->query("SELECT * FROM categories");
        $all = $query->fetchAll(PDO::FETCH_ASSOC);
        return $all;
    }

    public function createCategorie()
    {
        $query = $this->db->prepare("INSERT INTO categories (nom) VALUE (:nom)");
        $query->bindValue("nom", $_POST['name'], PDO::PARAM_STR);
        $query->execute();
        $query->closeCursor();
        return true;

    }

    public function updateCategorie()
    {
        $query = $this->db->prepare("UPDATE  SET  WHERE ");
    }

    public function deleteCategorie()
    {
        $categ = new Categorie;
        $categ_id = $categ->getId();
        $query = $this->db->prepare("DELETE FROM categories WHERE id = :id");
        $query->bindValue("id", $categ_id, PDO::PARAM_INT);
        $query->execute();
        $query->closeCursor();
        return true;
    }
}