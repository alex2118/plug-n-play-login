<?php

  define("dbuser", "");
  define("dbpass", "");
  define("dbhost", "");
  define("dbname", "");

  try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    echo $e->getMessage();
  }

 ?>
