<?php
    include "../databaseConnection/db.php";

    function getItems(){
        $query = "SELECT * FROM items;";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $itemList = Array();
            while($row = $stmt->fetch()){
                
            }
        }
    }

?>