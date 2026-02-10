<?php

namespace App\model;
use JasonGrimes\Paginator;
use App\model\Database as ModelDatabase;

class Pagination{
    private $paginator;
    private int $totalItems = 0;
    private int $itemsPerPage = 0;
    private int $currentPage = 0;
    private string $urlPattern = "";

    /**
     * Get the value of paginator
     */ 
    public function getPaginator()
    {
        return $this->paginator;
    }

    /**
     * Get the value of totalItems
     */ 
    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }

    /**
     * Get the value of itemsPerPage
     */ 
    public function getItemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    /**
     * Get the value of currentPage
     */ 
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Get the value of urlPattern
     */ 
    public function getUrlPattern()
    {
        return $this->urlPattern;
    }


}