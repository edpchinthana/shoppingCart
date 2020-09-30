<?php
     include "../databaseConnection/db.php";
     include "../models/item.php";
    $sellerId ="";
     $itemName = $_REQUEST["name"];
     $itemDescription = $_REQUEST['description'];
     $itemPrice = $_REQUEST['price'];
     $category = $_REQUEST['category'];
    // $image1 = $_FILES['image1'];
     //$image2 = $_FILES['image2'];
     $image1Data = file_get_contents($_FILES['file']);
     //$image2Data = file_get_contents($_FILES['imagetwo']['tmp_name']);
     $item = new Item(NULL, $category,$itemName,$itemDescription,$itemPrice,$sellerId);

    $count = 0;

     //Get count of itemImages
     $query = "SELECT COUNT(imageId) AS count FROM item_images ;";
     $stmt = $conn->prepare($query);
     $stmt->execute();
     while($row=$stmt->fetch()){
       $count = $row['count'];
    }

    $count++;
    
    $query = "INSERT INTO items (id, name, description, categoryId, price,sellerId) VALUES (:id, :name, :description, :category, :price, :seller);";
    $stmt = $conn -> prepare($query);
    $stmt -> bindParam("id",$count);
    $stmt -> bindParam("name",$itemName);
    $stmt -> bindParam("description",$itemDescription);
    $stmt -> bindParam("category",$category);
    $stmt -> bindParam("price",$itemPrice);
    $stmt -> bindParam("seller",$sellerId);
    $stmt->execute();

    $query = "INSERT INTO item_images(itemId, image) VALUES (:id, :image)";
    $stmt -> bindParam("id",$count);
    $stmt -> bindParam("id",$image1Data);
?>