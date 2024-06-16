<?php
    session_start();
    if ($_SESSION['recordpage'] == 0)
        header("Location:startrecord.php");
    else {
        $_SESSION['recordpage']--;
        header("Location:index.php?page=record");
    }
    die();