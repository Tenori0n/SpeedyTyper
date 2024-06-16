<div class="mainfont header" style="width: 100%; height: max-content">
    <a class="sitename" href="index.php?page=game" style="text-decoration: none; color: black">SpeedyTyper - Игра про набор слов</a>
    <a class="sections" href="index.php?page=record" style="text-decoration: none; color: black">Таблица рекордов</a>
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