<?php 
  try {
    require_once __DIR__ . '/../includes/connect.php';
    include __DIR__ . '/autoload.php';
    $pageName = $_GET['page'];	

    $table = new \Framework\DatabaseTable($connection, $pageName, 'id');

    $table->deleteData($_GET['id']);
    header("location: /portfolio/dash_$pageName");
  } catch (PDOException $e) {
    $title = 'Error';
    $output = 'Unable to connect to the database server:' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  }
