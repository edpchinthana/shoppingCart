<?php
    if(isset($_GET['route'])){
        $route=$_GET['route'];
        switch($route){
            case "home":
                header("location:../../");
            break;
            case "explore":
                header("location:../../explore.php");
            break;
            case "join":
                header("location:../../signup.php");
            break;
            case "login":
                header("location:../../login.php");
            break;
        }
    }else{
        //header("location:/shoppingCart/index.php");
    }
?>