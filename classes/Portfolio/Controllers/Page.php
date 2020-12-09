<?php
namespace Portfolio\Controllers;
Class Page {

  public function index() {
    $title = 'Avishek Dangol'; 
    $css = 'index.css';

    return ['template' => 'index.html.php',
      'title' => $title,
      'css' => $css,
      'layout' => 'layout.html.php'
    ];
  }

  public function photography() {
    $title = 'Photography';
    $css = 'photography.css'; 

    return ['template' => 'photography.html.php',
     'title' => $title,
     'css' => $css,
     'layout' => 'layout.html.php'
    ];
  }

  public function mardi() {
    $title = 'Mardi Trek Photo Gallery | Photography';
    $css = 'photography_pages.css';
    $page = 'mardi';
    $header = 'MARDI TREK PHOTO GALLERY';


    return ['template' => 'photography_pages.html.php',
      'title' => $title,
      'layout' => 'layout.html.php',
      'variables' => [
	'css' => $css,
	'page' => $page,
	'header' => $header
      ]
    ];
  }

  public function langtang() {
    $title = 'Langtang Trek Photo Gallery | Photography';
    $css = 'photography_pages.css';
    $page = 'langtang';
    $header = 'LANGTANG TREK PHOTO GALLERY';

    return ['template' => 'photography_pages.html.php',
      'title' => $title,
      'layout' => 'layout.html.php',
      'variables' => [
	'css' => $css,
	'page' => $page,
	'header' => $header,
      ]
    ];
  }
}

