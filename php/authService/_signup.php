<?php
        include_once "../databaseConnection/db.php";
        include "_checkUser.php";
        
        $username = trim($_REQUEST["username"]);
        $pass1 = md5(trim($_REQUEST["password1"]));
        $pass2 = md5(trim($_REQUEST["password2"]));
        $displayName = trim($_REQUEST["displayName"]);
        $picture = $_FILES['file']['tmp_name'];

        //$profilePic =
        
        if($pass1 != $pass2){
            echo "Password does not match";
        }else{
          if(doesUserExist($username, $conn)){
            throw new Exception("Username already exists");
          }else{
           $query = "INSERT INTO users (username, password, displayName, role, picture, pictureType) VALUES (?,?,?,?,?,?);";
           $stmt = $conn->prepare($query);
           $picturePropertiese = getimagesize($picture);
           $picture = base64_encode(file_get_contents(addslashes($picture)));
           if($stmt->execute([$username, $pass1, $displayName, "admin",$picture, $picturePropertiese['mime'] ])){
             echo "user added";
           }else{
             echo "failed";
           }
            

            
          }
        
        }

        
        




?>