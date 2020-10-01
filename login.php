<?php
    session_start();
    include "php/routing/only_guests.php";
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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="/res/favicon.ico" type="image/x-icon">
    <link rel="icon" href="res/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include "php/navigationBar/navigationBar.php";
    ?>

    <div id="content">
    <div class="login-section">
    <form method="POST" action="php/authService/_login.php">
    <h1>Login</h1>
        <div class="login-form">
            <label>Username</label><br><input type="text" name="username"> <br>
            <label>Password </label><br><input type="password" name="password"> <br><br>
            <input class="button" style="float:right;" type="submit" name="submit" value="Login">
        </div>
        </div>
    </form>
</div>
</body>
</html>