<?php
  include __DIR__ . '/autoload.php';
  
  if (isset($_POST['upload'])) {
    require_once __DIR__ . '/connect.php';

    $pageName = $_POST['page'];
    $image = $_FILES['image']['name'];

    $target = __DIR__ . '/../images/'.basename($image);
    
    $table = new \Framework\DatabaseTable($connection, $pageName, 'id');
    $table->insertData($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      header("Location: /portfolio/dash_$pageName");
    } else {
      echo "Error uploading image";
    }
  }
?>

