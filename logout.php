<?php

    session_start();
    unset($_SESSION["identifier"]);
    session_destroy();
    
    header('Location: login.php');
    
?>
