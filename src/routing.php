<?php

require "Controllers/AppController.php";

$parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$appController = new AppController();

switch ($parsed_url) {
    case '/':
        $appController->index();
        break;
    default:
        // todo: à créer
        $appController->pageNotFound();
}