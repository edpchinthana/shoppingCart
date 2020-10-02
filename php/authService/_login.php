<?php
        include "../databaseConnection/db.php";

        $name = trim($_REQUEST["username"]);
        $pass = md5(trim($_REQUEST["password"]));
    
        $query = "SELECT * FROM users WHERE username=:un AND password=:pass ;";
        $stmt=$conn->prepare($query);
        $stmt -> bindParam("un",$name);
        $stmt -> bindParam("pass", $pass);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount() ==1){
            session_start();
            $_SESSION['is_logged_in'] = true;
            while($row = $stmt->fetch()){
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['displayName'] =$row['displayName'];
                $_SESSION['picture'] = $row['picture'];
                $_SESSION['pictureType'] = $row['pictureType'];
            }
            header('location:../../showProfile.php');
        }else{
            header('location:../../login.php?er=1');
        }
?>