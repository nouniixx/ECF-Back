<?php

use App\model\User;
use App\model\UserManager;

$manager = new UserManager;

echo $twig->render("bibliotheque/connexion.html.twig", [
    "title" => "Se connecter"

]);