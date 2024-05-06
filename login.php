<?php
require('dbconnect.php');
if (!empty($_POST['username']) and !empty($_POST['userpassword'])) {
    $name = $_POST['username'];
    $password = $_POST['userpassword'];
    $query = "SELECT \"Username\" FROM \"SiteBD\".\"Users\" WHERE \"Username\"='$name' AND \"Password\"='$password'";
    $result = pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), $query);
    $user = pg_fetch_array($result);

    if (!empty($user)) {
        $_SESSION['login'] = true;
        $_SESSION['loginfailed'] = false;
        $_SESSION['Username'] = $user[0];
        $userr=$_SESSION['Username'];
        header("Location: index.php");
        die();
    } else {
        $_SESSION['login'] = false;
        $_SESSION['loginfailed'] = true;
        header("Location: index.php");
        die();
    }
}
else
{
    header("Location: index.php");
    die();
}

header("Location: index.php?page=login");
die();
?>