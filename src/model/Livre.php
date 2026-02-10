<?php

namespace App\model;

class Livre {

    private int $id = 0;
    private string $titre = "";
    private int $auteur_id = 0;
    private int $categorie_id = 0;
    private int $annee_publication = 0;
    private string $isbn = "";
    private int $disponible = 0;
    private string $synopsis = "";
    private int $like = 0;


    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    /**
     * Get the value of auteur_id
     */ 
    public function getAuteur_id(): ?int
    {
        return $this->auteur_id;
    }

    /**
     * Get the value of categorie_id
     */ 
    public function getCategorie_id(): ?int
    {
        return $this->categorie_id;
    }

    /**
     * Get the value of annee_publication
     */ 
    public function getAnnee_publication(): ?int
    {
        return $this->annee_publication;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * Get the value of disponible
     */ 
    public function getDisponible(): int
    {
        return $this->disponible;
    }

    /**
     * Get the value of synopsis
     */ 
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * Get the value of like
     */ 
    public function getLike(): int
    {
        return $this->like;
    }
}

