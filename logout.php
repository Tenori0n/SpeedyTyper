<?php
    session_start();
    unset($_SESSION['Username']);
    $_SESSION['login']=false;
    header("Location:index.php");
    die();