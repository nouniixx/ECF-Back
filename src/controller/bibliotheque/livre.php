<?php
use App\model\LivreManager;
use App\model\Livre;

$manager = new LivreManager;
$livre = new Livre;

echo $twig->render("bibliotheque/livre.html.twig", [
    "title" => "Livres",
    "livres" => $manager->getAllLivres(),
]);