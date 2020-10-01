<?php
    include "php/databaseConnection/db.php";
    include "php/models/category.php";
    include "php/itemService/_getCategories.php";
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
    <?php
        include "php/navigationBar/navigationBar.php";
    ?>

        <div id="content">
            <h1>Add Item</h1>
            <div id="addItems-body">
                <form action="php/itemService/_addItem.php" method="POST" id="addItemForm" enctype="multipart/form-data">
                    <span>Item Name</span>
                    <input type="text" name="name" required>
                    <span>Description</span>
                    <textarea name="description" id="" cols="30" rows="5" style="resize: none;" required></textarea>
                    <span>Category</span>
                    <select name="category">
                        <?php
                            foreach($categoryList as $category){
                                echo "<option value=".$category->getId()." >".$category->getName()."</option>";
                            }
                        ?>
                    </select>
                    <span>Price</span>
                    <input type="number" name="price" required style="width:120px!important;">
                    <span>Image-1</span>
                    <input type="file" name="file" id="" required>
                    <span style="text-align: right;">
                        <input class="button" style="width:100px!important" type="submit" value="Add Item">
                    </span>
                </form>
                <img src="res/addItems.jpg" id="addItems-image">
            </div>
        </div>
    </body>
</html>