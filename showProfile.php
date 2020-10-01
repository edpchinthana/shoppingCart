<?php
    include "php/databaseConnection/db.php";
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        $query = "SELECT * FROM users WHERE username = ?;";
        $stmt = $conn->prepare($query);
        if($stmt->execute([$username])){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetch()){
                echo "<h1>".$row['displayName']."</h1><br><br>";
                echo "<img width='100px' height='100px' src=data:".$row['pictureType'].";base64,".$row['picture'].">";
            }
        }
    }
?>