<?php

use App\model\CategorieManager;
use App\model\Categorie;

$manager = new CategorieManager;
$categorie = new Categorie;
$errors = [];
$categorie_id = $categorie->getId();
$categorie_nom = $categorie->getNom();
$categorie_manager = $manager->getAllCategories();
$categorie_delete = $manager->deleteCategorie();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categorie_nom = ($_POST['name']);
    
    if (empty($categorie_nom)) {
        $errors[] = "Le nom de catégorie est requis";
    }

    if (empty($errors)) {
        $manager->createCategorie($categorie);
        header("Location: /bibliotheque/categorie");
    }

}

echo $twig->render("bibliotheque/categorie.html.twig", [
    "title" => "Catégories",
    "categories" => $categorie_manager,
    "errors" => $errors,
]);