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
    <div class="mainfont header" style="width: 100%; height: max-content">
        <a class="sitename" href="index.php" style="text-decoration: none; color: black">SpeedyTyper - Игра про набор слов</a>
        <a class="sections" href="startrecord.php" style="text-decoration: none; color: black">Таблица рекордов</a>
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
    </div>
        <?php
        if (isset($_SESSION['message']))
        {
            echo('<div id="logoutmessage" style="width: 100%; height: 30px; display: flex; justify-content: center;">');
            echo("<p class='mainfont' style='color: red'>".$_SESSION['message']."</p>");
            unset($_SESSION['message']);
            echo('<script>setTimeout(function(){document.getElementById("logoutmessage").remove()}, 3000);</script>');
            echo('</div>');
        }
        ?>
    <div class="h4", id="h4">
        <div class="loginn" id="loginn">
            <form action="login.php" method="post">
                <p>Вход</p>
                <p>Имя пользователя</p>
                <input name="username" id="username" type="text" value="<?php if (isset($_COOKIE['nickname'])) echo($_COOKIE['nickname']); else echo(""); ?>"pattern="[A-Za-z]{6,}[0-9]{1,}" required placeholder="Введите имя пользователя">
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
    /*if (isset($_SESSION['lastgame'])) {
        echo('<p class="mainfont">Результат вашей последней игры: ' . $_SESSION['lastgame'] . ' очков</p>');
    }
    else {
        echo('<p></p>');
    }*/
    if (isset($_SESSION['Username'])) {
        $n1 = rand(0, intval(pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT MAX(\"ID\") FROM \"SiteBD\".\"Easy\""), 0, 0)));
        $n2 = rand(0, intval(pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT MAX(\"ID\") FROM \"SiteBD\".\"Normal\""), 0, 0)));
        $n3 = rand(0, intval(pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT MAX(\"ID\") FROM \"SiteBD\".\"Hard\""), 0 ,0)));
        $t1 = pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT \"Text\" FROM \"SiteBD\".\"Easy\" WHERE $n1 = \"SiteBD\".\"Easy\".\"ID\""), 0, 0);
        $t2 = pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT \"Text\" FROM \"SiteBD\".\"Normal\" WHERE $n1 = \"SiteBD\".\"Normal\".\"ID\""), 0, 0);;
        $t3 = pg_fetch_result(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT \"Text\" FROM \"SiteBD\".\"Hard\" WHERE $n1 = \"SiteBD\".\"Hard\".\"ID\""), 0, 0);;
        echo('<div style = "font-family: comfortaa; font-weight: 300;" >
        <form action = "gameres.php" id = "gameform" method = "POST" enctype = "multipart/form-data" >
            <input type = "hidden" id = "score" name = "score" value = "0" >
            <select name = "dif" id = "difficulty" style = "width:100px;" >
                <option value = "1" >Easy</option >
                <option value = "10" >Normal</option >
                <option value = "100" >Hard</option >
            </select >
            <script>
            var text1 = "'.$t1.'";
            var text2 = "'.$t2.'";
            var text3 = "'.$t3.'";
            </script>
            <input style="font-family: comfortaa; font-weight: 300;"type = "button" onclick = "game1(text1, text2, text3)" id = "StartGame" value = "НАЧАТЬ ИГРУ" >
        </form >
        <p id = "tekst"></p >
        <div>
            <div class ="task">
                <p id = "task"></p>
            </div>    
            <div id = "igra" class="igra">
                <p id = "game"></p >
            </div >
        </div>
    </div >');
    }
    else
    {
        echo('<p class = "mainfont">Войдите в свой аккаунт или создайте новый, чтобы начать игру</p>');
    }
    ?>
    <div class="mainfont footer">
        <p class="contacts">Этот сайт был создан в 2024 году, как проект для учебной практики.
            Контактные данные: тел. 88005553535, эл. почта: ilovespeedtyping@mail.ru</p>
    </div>
</body>
</html>