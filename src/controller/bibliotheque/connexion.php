<?php

use App\model\User;
use App\model\UserManager;

$manager = new UserManager;
$user_manager = new User;
$errors = [];
$user = trim($_POST['user'] ?? '');
$pass = trim($_POST['password'] ?? '');
$connect = null;

if (isset($_SESSION['user'])) {
    $connect = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($user)) {
        $errors[] = "Le username est requis";
    }

    if (empty($pass)) {
        $errors[] = "Le mot de passe est requis";
    }

    if (empty($errors)) {
        $manager->login($user_manager);
    }
}

echo $twig->render("bibliotheque/connexion.html.twig", [
    "title" => "Se connecter",
    "errors" => $errors ?? [],
    "user" => $user ?? ''
]);
