<?php
require('dbconnect.php');
if (!empty($_POST['username']) and !empty($_POST['userpassword'])) {
    $name = $_POST['username'];
    $password = $_POST['userpassword'];
    setcookie('nickname', $_POST['username'], time()+60*60*24*3);
    $query = "SELECT \"Username\" FROM \"SiteBD\".\"Users\" WHERE \"Username\"='$name' AND \"Password\"='$password'";
    $result = pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), $query);
    $user = pg_fetch_array($result);

    if (!empty($user)) {
        $_SESSION['login'] = true;
        $_SESSION['message'] = "Вы успешно вошли в свой аккаунт!";
        $_SESSION['Username'] = $user[0];
        $userr=$_SESSION['Username'];
        header("Location: index.php");
        die();
    } else {
        $_SESSION['login'] = false;
        $_SESSION['message'] = "Неправильный логин/пароль";
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