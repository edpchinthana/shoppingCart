<?php
    if(isset($_SESSION['is_logged_in'])){
        $role = $_SESSION['role'];
        if($role!="seller"){
            header("location:index.php");
        }
    }else{
        header("location:index.php");
    }
?>