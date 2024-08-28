<?php

$routes = require('routes.php');

if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  http_response_code(404);
  require $routes['404'];
}