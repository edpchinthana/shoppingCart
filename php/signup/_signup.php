<?php
        include "../databaseConnection/db.php";

        $username = trim($_REQUEST["username"]);
        $pass1 = md5(trim($_REQUEST["password1"]));
        $pass2 = md5(trim($_REQUEST["password2"]));
        $displayName = trim($_REQUEST["displayName"]);
        //$profilePic = $_FILES["profilePic"];
        
        if($pass1 != $pass2){
            echo "Password does not match";
        }else{

          $target_dir = "../../uploads/profilePictures/";
          $temp = explode(".", $_FILES["profilePic"]["name"]);
          $newfilename = round(microtime(true)) . '.' . end($temp);
          $target_file = $target_dir .$newfilename;
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          // Check if image file is a actual image or fake image
          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
            }
          }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
          }
          
          // Check file size
          if ($_FILES["profilePic"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          
          // Allow certain file formats
          // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          // && $imageFileType != "gif" ) {
          //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          //   $uploadOk = 0;
          // }
          
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
        
            if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
              echo "The file ".$newfilename. " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }


        $query = "SELECT * FROM users WHERE username=:un AND password=:pass ;";
        $stmt=$conn->prepare($query);
        $stmt -> bindParam("un",$name);
        $stmt -> bindParam("pass", $pass);
        $stmt->execute();
    
        if($stmt->rowCount() ==1){
            session_start();
            $_SESSION['is_logged_in'] = true;
            $_SESSION['role'] = "user";
            $_SESSION['username'] = "username";
            $_SESSION['display_name'] = "display name";
            $_SESSION['photo'] = "sample photo";
            header('location:../../');
        }else{
            header('location:../../login.php?er=1');
        }

        
        }

        
        




?>