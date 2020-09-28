<?php
     include "../databaseConnection/db.php";
     include "../models/item.php";

     if(isset($_REQUEST['newItem'])){
         $newItem = unserialize($_REQUEST['newItem']);

         $query = "INSERT INTO items (name, categoryId, description, price, sellerId) VALUES(".
                    "'".$newItem -> getName()."',".
                    "'".$newItem -> getCategoryId()."',".
                    "'".$newItem -> getDescription()."',".
                        $newItem -> getPrice().",".
                    "'".$newItem -> getSellerId()."');";
        
     }
?>