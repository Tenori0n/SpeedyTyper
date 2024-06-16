<?php
    session_start();
    $_SESSION['recordpage']=0;
    header("Location:index.php?page=record");
    die();