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

        // $query = "SELECT * FROM users WHERE username=:un AND password=:pass ;";
        // $stmt=$conn->prepare($query);
        // $stmt -> bindParam("un",$name);
        // $stmt -> bindParam("pass", $pass);
        // $stmt->execute();
    //
        // if($stmt->rowCount() ==1){
        //     session_start();
        //     $_SESSION['is_logged_in'] = true;
        //     $_SESSION['role'] = "user";
        //     $_SESSION['username'] = "username";
        //     $_SESSION['display_name'] = "display name";
        //     $_SESSION['photo'] = "sample photo";
        //     header('location:../../');
        // }else{
        //     header('location:../../signup.php?er=1');
        // }

        
        }

        
        




?>