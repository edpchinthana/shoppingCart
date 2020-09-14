<?php
    if(isset($_GET['route'])){
        $route=$_GET['route'];
        switch($route){
            case "home":
                header("location:/shoppingCart/");
            break;
            case "explore":
                header("location:/shoppingCart/explore.php");
            break;
            case "join":
                header("location:/shoppingCart/signup.php");
            break;
            case "login":
                header("location:/shoppingCart/login.php");
            break;
        }
    }else{
        //header("location:/shoppingCart/index.php");
    }
?>