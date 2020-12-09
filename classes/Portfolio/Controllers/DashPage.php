<?php
namespace Portfolio\Controllers;

Class DashPage {
  public function dash() {
    $title = 'Dashboard';
    $css = 'dash_pages.css';

    return ['template' => 'dash.html.php',
      'title' => $title,
      'layout' => 'dash_layout.html.php',
      'variables' => [
        'css' => $css,
      ]
    ];
  }

  public function dash_mardi() {
    $title = 'Mardi | Dashboard';
    $page = 'mardi';

    return [
      'template' => 'dash_pages.html.php',
      'title' => $title,
      'layout' => 'dash_layout.html.php',
      'variables' => [
        'css' => 'dash_pages.css',
        'page' => $page
      ]
    ];
  }

  public function dash_langtang() {
    $title = 'Langtang | Dashboard';
    $page = 'langtang';

    return [
      'template' => 'dash_pages.html.php',
      'title' => $title,
      'layout' => 'dash_layout.html.php',
      'variables' => [
	'css' => 'dash_pages.css',
	'page' => $page
      ]
    ];
  }
}

	