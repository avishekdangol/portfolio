<?php
  require_once __DIR__ . '/../includes/connect.php';
  include __DIR__ . '/../classes/DatabaseTable.php';
  $tableName = $_POST['page'];
  
  if (isset($_POST['update'])) {
    $table = new 'Framework'DatabaseTable($connection, $tableName, 'id');

    $table->updateData($page, [
	  'title' => $title,
	  'page' = $page
	]);
  } else {	   
    echo "Please select a file to replace"; 
  }

?>

