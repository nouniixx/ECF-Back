<?php


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once "RouterExtension.php";

$loader = new FilesystemLoader("../src/views");
$twig = new Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new DebugExtension());
$twig->addGlobal("session", $_SESSION);

function addRouterToTwig($router) {
    global $twig;
    $twig->addExtension(new RouterExtension($router));
}