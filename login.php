<?php
    if(isset($_GET['er'])){
        if($_GET['er']==1){
            echo "wrong password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="php/login/_login.php">
        <label>Username</label> <input type="text" name="username"> <br>
        <label>Password</label> <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>