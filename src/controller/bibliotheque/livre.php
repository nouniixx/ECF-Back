<?php

use App\model\LivreManager;
use JasonGrimes\Paginator;

$manager = new LivreManager;
$livres = $manager->getAllLivres();
// $totalItems = 100;
// $itemsPerPage = 10;
// $currentPage = 1;
// $urlPattern = '/foo/page/(:num)';

// $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);



echo $twig->render("bibliotheque/livre.html.twig", [
    "title" => "Livres",
    "livres" => $livres,
]);
