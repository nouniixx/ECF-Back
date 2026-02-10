<?php
use App\model\UserManager;


echo $twig->render("home.html.twig", [
    "title" => "Home",
    "user_session" => $_SESSION['user']
]);