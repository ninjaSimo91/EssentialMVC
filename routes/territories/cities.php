<?php

use Controllers\CitiesController;

$router->prefixAliasWithController('cities', CitiesController::class, function ($router) {

  // View
  $router->middleware('permission:view_cities', function ($router) {
    $router->get('/', 'index', 'index');
    $router->post('/{id}', 'show', 'show');
  });

  // Add
  $router->middleware('permission:add_cities', function ($router) {
    $router->get('/create', 'create', 'create');
    $router->post('/', 'store', 'store');
  });

  // Edit
  $router->middleware('permission:edit_cities', function ($router) {
    $router->get('/{id}/edit', 'edit', 'edit');
    $router->put('/{id}', 'update', 'update');
  });

  // Delete
  $router->middleware('permission:delete_cities', function ($router) {
    $router->delete('/{id}', 'delete', 'delete');
  });
});
