<?php
    include "php/routing/navigator.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="shortcut icon" href="/res/favicon.ico" type="image/x-icon">
    <link rel="icon" href="res/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul>
            <a><li><div>
                <img class="navbar-logo" src="res/logo.png" alt="">
            </div></li></a>
            <a href="index.php"><li class="navbar-logo-text">EzShopping</li></a>
            <a href="index.php"><li class="navbar-active">Home</li></a>
            <a href="explore.php"><li>Explore</li></a>
            <a href="signup.php"><li>Join</li></a>
            <a href="login.php"><li>Login</li></a>
        </ul>
    </nav>
</body>
</html>