<?php


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\Extra\Markdown\DefaultMarkdown;
use Twig\Extra\Markdown\MarkdownExtension;
use Twig\Extra\Markdown\MarkdownRuntime;
use Twig\RuntimeLoader\RuntimeLoaderInterface;

require_once "RouterExtension.php";

$loader = new FilesystemLoader("../src/views");
$twig = new Environment($loader, [
    'debug' => true
]);

$twig->addExtension(new DebugExtension());
$twig->addExtension(new MarkdownExtension());
$twig->addGlobal("session", $_SESSION);
$twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
    public function load($class) {
        if (MarkdownRuntime::class === $class) {
            return new MarkdownRuntime(new DefaultMarkdown());
        }
    }
});

function addRouterToTwig($router) {
    global $twig;
    $twig->addExtension(new RouterExtension($router));
}

