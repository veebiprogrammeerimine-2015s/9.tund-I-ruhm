<?php

    require_once("functions.php");
    
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        // ära enne suunamist midagi rohkem tee
        exit();
    }
    
    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: login.php");
    }

?>

Tere, <?=$_SESSION['user_email'];?> <a href="?logout=1">Logi välja</a>

<br>

<?php if(isset($_SESSION['login_message'])): ?>

<p style="color:green;">
    <?=$_SESSION['login_message'];?>
</p>

<?php 
    // kustutan muutuja, et rohkem ei näidataks
    // ainult 1 korra pärast sisselogimist
    unset($_SESSION['login_message']);

endif; ?>
