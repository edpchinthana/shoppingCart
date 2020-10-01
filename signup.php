<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="/res/favicon.ico" type="image/x-icon">
    <link rel="icon" href="res/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
        include "php/navigationBar/navigationBar.php";
    ?>
    <div id="content">
        <div class="signup-section">
        <form method="POST" action="php/authService/_signup.php" enctype="multipart/form-data">
        <h1>Signup</h1>
            <div class="signup-form">
            <label>Display Name</label><br><input type="text" name="displayName"> <br><br>
            <label>Username</label><br><input type="text" name="username"> <br><br>
            <label>Password</label><br><input type="password" name="password1"> <br><br>
            <label>Re-type Password </label><br><input type="password" name="password2"> <br><br>
            <label>Profile Picture</label><br><input type="file" name="file" id="profilePic"> <br><br>
            <input class="button" style="float:right;" type="submit" name="submit" value="Signup">
        </div>
            </form>
        </div>
    </div>
</body>
</html>