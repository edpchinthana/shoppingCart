<?php
    if(isset($_SESSION['is_logged_in'])){
        $role = $_SESSION['role'];
        if($role!="guest"){
            header("location:index.php");
        }
    }
?>