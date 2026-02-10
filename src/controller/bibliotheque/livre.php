<?php
use App\model\LivreManager;
use App\model\Livre;
use App\model\Categorie;
use App\model\Auteur;

$manager = new LivreManager;
$livre = new Livre;
$categorie = new Categorie;
$auteur = new Auteur;
$parsedown = new Parsedown;
$bouquin = $manager->getAllLivres();
$categorie_nom = $categorie->getNom();
$auteur_prenom = $auteur->getPrenom();
$auteur_nom = $auteur->getNom();
// $synopsis = $livre->getSynopsis();

echo $twig->render("bibliotheque/livre.html.twig", [
    "title" => "Livres",
    "livres" => $bouquin, [ 
        "categorie" => $categorie_nom,
        "auteurPrenom" => $auteur_prenom,
        "auteurNom" => $auteur_nom
    ]
    // "parsedown" => $parsedown->text($synopsis),
]);