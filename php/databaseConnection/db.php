<?php
 try {
    $conn = new PDO("mysql:host=localhost;dbname=shopping_cart", "root", "");	
  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }
?>