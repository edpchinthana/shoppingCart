<?php

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Item</title>
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/addItem.css">
    </head>
    <body>
    <!--Navigation Bar-->
        <nav>
            <ul>
                <a><li><div>
                    <img class="navbar-logo" src="res/logo.png" alt="">
                </div></li></a>
                <a href="php/routing/navigator.php?route=home"><li class="navbar-logo-text">EzShopping</li></a>
                <a href="php/routing/navigator.php?route=home"><li>Home</li></a>
                <a href="php/routing/navigator.php?route=explore"><li>Explore</li></a>
                <a href="php/routing/navigator.php?route=join"><li>Join</li></a>
                <a href="php/routing/navigator.php?route=login"><li>Login</li></a>
            </ul>
        </nav>

        <div id="content">
            <h1>Add Item</h1>
            <div id="addItems-body">
                <form action="" id="addItemForm">
                    <span>Item Name</span>
                    <input type="text" required>
                    <span>Description</span>
                    <textarea name="" id="" cols="30" rows="5" style="resize: none;" required></textarea>
                    <span>Category</span>
                    <select>
                        <option>Option 1</option>
                        <option>Option 2</option>
                    </select>
                    <span>Price</span>
                    <input type="number" required style="width:120px!important;">
                    <span>Image-1</span>
                    <input type="file" name="" id="" required>
                    <span>Image-2</span>
                    <input type="file" required>
                    <br>
                    <span style="text-align: right;">
                        <input class="button" style="width:100px!important" type="submit" value="Add Item">
                    </span>
                </form>
                <img src="res/addItems.jpg" id="addItems-image">
            </div>
        </div>
    </body>
</html>