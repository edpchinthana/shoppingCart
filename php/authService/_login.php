<?php
        include "../databaseConnection/db.php";

        $name = trim($_REQUEST["username"]);
        $pass = md5(trim($_REQUEST["password"]));
    
        $query = "SELECT * FROM users WHERE username=:un AND password=:pass ;";
        $stmt=$conn->prepare($query);
        $stmt -> bindParam("un",$name);
        $stmt -> bindParam("pass", $pass);
        $stmt->execute();
    
        if($stmt->rowCount() ==1){
            session_start();
            $_SESSION['is_logged_in'] = true;
            $_SESSION['role'] = "user";
            $_SESSION['username'] = $name;
            $_SESSION['display_name'] = "display name";
            $_SESSION['photo'] = "sample photo";
            header('location:../../showProfile.php');
        }else{
            header('location:../../login.php?er=1');
        }
?>