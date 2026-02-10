<?php

namespace App\model;

class Categorie{
    private int $id = 0;
    private string $nom = "";

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }
}