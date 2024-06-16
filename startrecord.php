<?php
    session_start();
    $_SESSION['recordpage']=0;
    header("Location:records.php");
    die();