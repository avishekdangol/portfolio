<?php
namespace Framework;

class EntryPoint {

  public function __construct($route, $method, \Portfolio\Routes $routes) { 
    $this->method = $method;
    $this->route = $route;
    $this->routes = $routes;
    $this->checkURL();
  }

  private function checkURL() {
    if ($this->route !== strtolower($this->route)) {
      http_response_code(301);
      header('location: ' . strtolower($this->route));
    }
  } 

  private function loadTemplate($templateFileName, $variables = []) {
    extract($variables);
    ob_start();
    include __DIR__ . '/../../templates/' . $templateFileName;
    return ob_get_clean();
  }

  private function authorize() {
    session_start();
    if(!$_SESSION['u_name']) {
      header('Location: /login');
    }
  }

  public function run() {
    $routes = $this->routes->getRoutes();
    $authentication = $this->routes->getAuthentication();

    if (isset($routes[$this->route][$this->method]['login']) && !$authentication->isLoggedIn()) {
      header('Location: /login');   
    } else {
      $controller = $routes[$this->route][$this->method]['controller'];
      $action = $routes[$this->route][$this->method]['action'];
      $page = $controller->$action();

      $title = $page['title'];

      if (isset($page['variables'])) {
        $css = $page['variables']['css'];
        $output = $this->loadTemplate($page['template'], $page['variables']);
      } else {
         $css = $page['css'];
         $output = $this->loadTemplate($page['template']);
      }
      include __DIR__ . '/../../templates/' . $page['layout'];
    }
  }
}
