<?php
require '../helpers.php';
//require basePath('views/home.view.php');


require basePath('Database.php');
/*
$config = require basePath('config/db.php');

$db = new Database($config);

inspect($db->conn);
*/
require basePath('Router.php');

$router = new Router;

$routes = require basePath('routes.php');
//$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// inspectView('listings');
//inspectAndDie($listings);

/*
$routes = [
  '/' => 'controllers/home.php',
  '/listings' => 'controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php',
  '404' => 'controllers/error/404.php' // Add this route
];



if (array_key_exists($uri, $routes)) {
  require basePath($routes[$uri]);
} else {
  require basePath($routes['404']);
}
*/