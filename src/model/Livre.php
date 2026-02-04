<?php

namespace Model;

use PDO;
use Database;


class Livre {

    private int $id;
    private string $titre;
    private int $auteur_id;
    private int $categorie_id;
    private int $annee_publication;
    private string $isbn;
    private int $disponible;
    private string $synopsis;
    private int $like;

}