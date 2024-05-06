<?php
    session_start();
    unset($_SESSION['Username']);
    $_SESSION['login']=false;
    $_SESSION['message']="Вы вышли из своего аккаунта";
    header("Location:index.php");
    die();