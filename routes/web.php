<?php

/** @var EssentialMVC\Routing\Router $router */

use Controllers\HomeController;

$router->get('/', [HomeController::class, 'index'], 'home', ['maintenance']);

// Api
$router->prefix('api', function ($router) {

  // Territories
  $router->prefixAliasWithMiddleware('territories', 'auth', function ($router) {
    require __DIR__ . '/territories/cities.php';
  });
});
