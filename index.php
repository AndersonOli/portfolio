<?php
ob_start();
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(SITE['url']);
// set namespace dos controllers
$router->namespace("Source\App");

/*
 * Controller: WEB
 * Method: homepage
 */

$router->group(null);
$router->get("/", "Web:home");

/*
 * Controller: WEB
 * Method: erros
 */
$router->group("ops");
$router->get("/{code}", "Erros:erro");

$router->dispatch();

if($router->error()){
    $router->redirect("/ops/{$router->error()}");
}
ob_flush();