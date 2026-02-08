<?php

echo $twig->render("home.html.twig", [
    "title" => "Bienvenue sur la home page",
    "user_session" => $_SESSION['user']
]);