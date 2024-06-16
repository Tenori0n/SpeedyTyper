<?php
    session_start();
    if (($_SESSION['recordpage']+2)*19 - $_SESSION['m'][0] >= 19);
    else
        $_SESSION['recordpage']++;
    header("Location:index.php?page=record");
    die();