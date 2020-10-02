<?php
    session_start();
    //include "php/routing/only_buyers.php";
    include "php/databaseConnection/db.php";
    
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo "<h1>".$_SESSION['displayName']."</h1><br><br>";
                echo "<img width='100px' height='100px' src=data:".$_SESSION['pictureType'].";base64,".$_SESSION['picture'].">";
    }
?>