<?php
try {
include __DIR__ . '/includes/autoload.php';

$route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');
$routes = new \Portfolio\PageRoutes();
$method = $_SERVER['REQUEST_METHOD'];

$entryPoint = new \Framework\EntryPoint($route, $method, $routes);
$entryPoint->run();

} catch (\PDOException $e) {
  $title = 'Error';
  $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  include __DIR__ . '/templates/layout.html.php';
}





