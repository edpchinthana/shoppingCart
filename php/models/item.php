<?php
    class Item{
        var $id;
        var $categoryId;
        var $name;
        var $description;
        var $price;
        var $sellerId;

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
    }
?>