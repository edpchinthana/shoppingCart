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
</head>
<body>
    <nav>
        <ul>
            <a><li><div>
                <img class="navbar-logo" src="res/logo.png" alt="">
            </div></li></a>
            <a href="php/routing/navigator.php?route=home"><li class="navbar-logo-text">EzShopping</li></a>
            <a href="php/routing/navigator.php?route=home"><li class="navbar-active">Home</li></a>
            <a href="php/routing/navigator.php?route=explore"><li>Explore</li></a>
            <a href="php/routing/navigator.php?route=join"><li>Join</li></a>
            <a href="php/routing/navigator.php?route=login"><li>Login</li></a>
        </ul>
    </nav>
</body>
</html>