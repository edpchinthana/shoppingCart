<?php
    function doesUserExist($username){
        include_once "../databaseConnection/db.php";
        try{
        $query = "SELECT * FROM users WHERE username=:un;";
        $stmt=$conn->prepare($query);
        $stmt -> bindParam("un",$username);
        $stmt->execute();
    
        if($stmt->rowCount()>0){
            return true;
        }else{
            return false;
        }
        }catch(Exception $e){
            throw new Exception("Check user failed ".$e);
        }
    }

?>