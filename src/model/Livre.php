<?php

namespace App\model;

use PDO;
use Database;


class Livre {

    public int $id;
    public string $titre;
    public int $auteur_id;
    public int $categorie_id;
    public int $annee_publication;
    public string $isbn;
    public int $disponible;
    public string $synopsis;
    public int $like;

}