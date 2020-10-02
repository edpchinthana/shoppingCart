<?php
    class Item{
        var $id;
        var $categoryId;
        var $name;
        var $description;
        var $price;
        var $sellerId;
        var $imageId;
        var $imageType;
        var $image;

        function __construct($id, $categoryId, $name, $description, $price, $sellerId){
            $this -> id = $id;
            $this -> categoryId = $categoryId;
            $this -> name = $name;
            $this -> description = $description;
            $this -> price = $price;
            $this -> sellerId = $sellerId;
        }

        function getId(){
            return $this -> id;
        }

        function getCategoryId(){
            return $this -> categoryId;
        }

        function getName(){
            return $this -> name;
        }

        function getDescription(){
            return $this -> description;
        }

        function getPrice(){
            return $this -> price;
        }

        function getSellerId(){
            return $this -> sellerId;
        }

        function getImageId(){
            return $this -> imageId;
        }

        function getImageType(){
            return $this -> imageType;
        }

        function getImage(){
            return $this -> image;
        }

        function setImageId($imageId){
            $this->imageId = $imageId;
        }

        function setImageType($imageType){
            $this->imageType = $imageType;
        }

        function setImage($image){
            $this->image = $image;
        }
    }
?>