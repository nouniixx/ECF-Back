<?php

$router = new AltoRouter();

$router->map("GET", "/", "home", "home");
$router->map("GET", "/bibliotheque/connexion", "/bibliotheque/connexion", "connexion");
$router->map("GET", "/bibliotheque/livre", "/bibliotheque/livre", "livre");
$router->map("GET", "/bibliotheque/auteur", "/bibliotheque/auteur", "auteur");

addRouterToTwig($router);

$match = $router->match();

if (is_array($match)) {

    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "controller" . DIRECTORY_SEPARATOR . $match['target'] . ".php";
    }
} else {
    echo "Erreur 404";
}