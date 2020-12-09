<?php
  require_once "constants.php";
  // Create a connection
  try{
    $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'Unable to connect to the database server:' . $e->getMessage();
  }

 