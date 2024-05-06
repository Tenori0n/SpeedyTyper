<?php
require("dbconnect.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <title>SpeedyTyper - игра про набор слов</title>
    <link rel="icon" href="img/Clannad_hd.ico">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="mainfont">
        <p class="sitename">SpeedyTyper - Игра про набор слов</p>
        <p class="sections">Таблица рекордов</p>
        <?php
        if (isset($_SESSION['Username']))
        {
            echo('<div id="welcoming" class="welcoming"><span>Здравствуйте, </span>');
            echo($_SESSION['Username']);
            echo('<form action="logout.php">');
            echo('<input type="submit" value="Выйти" class="reg2but"></input></form></div>');
            $name = $_SESSION['Username'];
            $query = "SELECT \"Avatar\" FROM \"SiteBD\".\"Users\" WHERE \"Username\"='$name'";
            $result = pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), $query);
            $filename = pg_fetch_array($result);
            echo "<img src=".$filename[0]." height='100px' width='100px'>";
        }
        else
        {
            echo('<div id="reg" class="reg" onclick="regvis(),loginnvis(),entering()">Регистрация/<br/>Вход</div>');
        }
        ?>

    </header>
    <div class="h4", id="h4">
        <div class="loginn" id="loginn">
            <form action="login.php" method="post">
                <p>Вход</p>
                <p>Имя пользователя</p>
                <input name="username" id="username" type="text" pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Введите имя пользователя">
                <p>Пароль</p>
                <input name="userpassword" id="userpassword" type="password" pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Введите пароль"><br><br>
                <input type="submit" id="loginbut" class="regbut" onclick="hidereg()" value="Войти"></input>
                <input class="regbut" type="reset">
                <button type="button" class="regbut" onclick="loginhid(), registvis(), registering()">Регистрация</button>
                <div class="close1" onclick="hidereg()">
                    <img src="img/cross.png" height="30px" width="30px">
                </div>
            </form>
        </div>
        <div class="regist" id="regist">
            <form action="register.php" method="POST" enctype="multipart/form-data">
                <p class="registname">Регистрация</p>
                <p>Имя пользователя</p>
                <input id="username1" name="login" type="text" pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Минимум 6 латинских символов и 1 цифра, максимум 15 символов">
                <p>Аватар</p>
                <input name="avatar" type="file">
                <p>Пароль</p>
                <input id="userpassword1" name="password" type="password" pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Минимум 6 латинских свимволов и 1 цифра">
                <p>Подтверждение пароля</p>
                <input id="userpassword2" name="passwordcheck" type="password" pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Повторите пароль"><br><br>
                <input id="regbutt" class="regbut" type="submit">
                <input class="regbut" type="reset">
                <div class="close2" onclick="hidereg()">
                    <img src="img/cross.png" height="30px" width="30px">
                </div>
            </form>
        </div>
    </div>
    <?php
    if ($_SESSION['loginfailed'])
    {
        echo('<script type="text/javascript"> alert("Неправильный логин/пароль")</script>');
        $_SESSION['loginfailed']=false;
    }
    ?>
    <footer class="mainfont">
        <p class="contacts">Этот сайт был создан в 2024 году, как проект для учебной практики.
            Контактные данные: тел. 88005553535, эл. почта: ilovespeedtyping@mail.ru</p>
    </footer>
</body>
</html>