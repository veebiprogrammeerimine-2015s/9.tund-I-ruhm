<?php 

$user1 = new User("Romil");
$user2 = new User("Juku");

class User {
    
    // User.class.php
    
    //see fn k�ivitub kui tekitame uue instantsi
    // new User()
    function __construct($name){
        
        echo $name." <br>";
    }
    
    
    
} ?>