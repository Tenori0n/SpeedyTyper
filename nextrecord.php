<?php
    session_start();
    $_SESSION['recordpage']++;
    header("Location:records.php");
    die();