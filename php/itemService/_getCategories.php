<?php

    $query = "SELECT * FROM categories;";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $categoryList = array();

    if($stmt->rowCount()>0){
       while($row=$stmt->fetch()){
        $category = new Category($row['id'], $row['name'], $row['description']);
            array_push($categoryList, $category);
       }
    }else{
        echo "error happend";
    }

?>