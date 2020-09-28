<?php
    class User{
        var $displayName;
        var $username;
        var $role;

        function __construct($displayName, $username, $role){
            $this->displayName = $displayName;
            $this->username = $username;
            $this->role = $role;
        }

        function getDisplayName(){
            return $this->displayName;
        }

        function getUsername(){
            return $this->username;
        }

        function getRole(){
            return $this->role;
        }
    }
?>