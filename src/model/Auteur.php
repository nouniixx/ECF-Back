<?php

namespace App\model;

class Auteur {

    private int $id = 0;
    private string $nom = "";
    private string $prenom = "";
    private string $biographie = "";


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
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Get the value of biographie
     */ 
    public function getBiographie(): ?string
    {
        return $this->biographie;
    }
}
