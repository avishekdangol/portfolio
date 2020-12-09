<?php
namespace Portfolio;

class PageRoutes implements \Portfolio\Routes {

  private $adminTable;
  private $authentication;

  public function __construct() {
    include __DIR__ . '/../../includes/connect.php';

    $this->adminTable = new \Framework\DatabaseTable($connection, 'admin', 'id');
    $this->authentication = new \Framework\Authentication($this->adminTable, 'u_name', 'u_pass');
  }

  public function getRoutes() : array {
    include __DIR__ . '/../../includes/connect.php';

    $pageController = new \Portfolio\Controllers\Page();
    $dashController = new \Portfolio\Controllers\DashPage();
    $adminController = new \Portfolio\Controllers\Login($this->authentication);

    $routes = [
      'index' => [
	'GET' => [
	  'controller' => $pageController,
	  'action' => 'index',
       	]
      ],
      '' => [
	'GET' => [
	  'controller' => $pageController,
	  'action' => 'index',
       	]
      ],
      'photography' => [
	'GET' => [
	  'controller' => $pageController,
	  'action' => 'photography',
       	]
      ],
      'mardi' => [
	'GET' => [
	  'controller' => $pageController,
	  'action' => 'mardi',
       	]
      ],
      'langtang' => [
	'GET' => [
	  'controller' => $pageController,
	  'action' => 'langtang',
       	]
      ],
      'dash' => [
	'GET' => [
	  'controller' => $dashController,
	  'action' => 'dash',
	  'login' => true
       	]
      ],
      'dash_mardi' => [
	'GET' => [
	  'controller' => $dashController,
	  'action' => 'dash_mardi',
	  'login' => true
       	]
      ],
      'dash_langtang' => [
	'GET' => [
	  'controller' => $dashController,
	  'action' => 'dash_langtang',
	  'login' => true
       	]
      ],
      'login' => [
        'GET' => [
          'controller' => $adminController,
          'action' => 'loginForm',
        ],
        'POST' => [
          'controller' => $adminController,
	  'action' => 'userLogin',
        ]
      ],
      'logout' => [
        'GET' => [
          'controller' => $adminController,
          'action' => 'logout',
        ],
      ]
    ];
    return $routes;
  }

  public function getAuthentication() : \Framework\Authentication {
    return $this->authentication;
  }
}

