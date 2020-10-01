<?php
     include "../databaseConnection/db.php";
     include "../models/item.php";
    $sellerId ="admin";
     $itemName = $_REQUEST["name"];
     $itemDescription = $_REQUEST['description'];
     $itemPrice = $_REQUEST['price'];
     $category = $_REQUEST['category'];
    // $image1 = $_FILES['image1'];
     //$image2 = $_FILES['image2'];
     $image1Data = base64_encode(file_get_contents(addslashes($_FILES['file']['tmp_name'])));
     $imageType = getimageSize($_FILES['file']['tmp_name']);
     //$image2Data = file_get_contents($_FILES['imagetwo']['tmp_name']);
     $item = new Item(NULL, $category,$itemName,$itemDescription,$itemPrice,$sellerId);

    $count = 0;

     try{
       //Get count of itemImages
     $query = "SELECT MAX(id) AS count FROM items ;";
     $stmt = $conn->prepare($query);
     if($stmt->execute()){
       $stmt -> setFetchMode(PDO::FETCH_ASSOC);
      while($row=$stmt->fetch()){
        $count = $row['count'];
     }
 
     $count++;
     echo $count;
     $query2 = "INSERT INTO items (name, description, categoryId, price,sellerId) VALUES (:name, :description, :category, :price, :seller);";
     $stmt2 = $conn -> prepare($query2);
     $stmt2 -> bindParam("name",$itemName);
     $stmt2 -> bindParam("description",$itemDescription);
     $stmt2 -> bindParam("category",$category);
     $stmt2 -> bindParam("price",$itemPrice);
     $stmt2 -> bindParam("seller",$sellerId);
    
     
     if( $stmt2->execute()){
      $query3 = "INSERT INTO item_images(itemId, image, image_type) VALUES (?,?,?)";
      $stmt3 = $conn -> prepare($query3);
      if( $stmt3 -> execute([$count, $image1Data, $imageType['mime']])){
        echo "success";
      }else{
        echo "image  upload failed";
      }
     }else{
       echo "item upload failed";
     }

     }else{
       echo "get count failed";
     }
     }catch(Exception $er){
       echo $er->getMessage();
     }


?>