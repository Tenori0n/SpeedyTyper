<body>
    <?php
        if (isset($_SESSION['recordpage']))
            $j = $_SESSION['recordpage'];
        else {
            $j = 0;
            $_SESSION['recordpage'] = $j;
        }
    ?>
    <div>
        <div class="mainfont records">
        <table border="1" style="background: white">
            <tr>
                <th>№</th>
                <th>Имя пользователя</th>
                <th>Сложность</th>
                <th>Счет</th>
            </tr>
        <?
        $n = ($j*19)+1;
        $_SESSION['m'] = pg_fetch_array(pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), "SELECT COUNT(*) FROM \"SiteBD\".\"Results\""));
        for ($i = ($j)*19; $i < ($j+1)*19; $i+=1, $n+=1) {
            if ($i >= $_SESSION['m'][0]) {continue;};
            $query = "SELECT (SELECT \"Username\" FROM \"SiteBD\".\"Users\" WHERE \"Results\".\"UserID\" = \"Users\".\"ID\"), \"Difficulty\", \"Score\" FROM \"SiteBD\".\"Results\" ORDER BY \"Score\" DESC LIMIT 1 OFFSET $i";
            $result = pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), $query);
            $table = pg_fetch_array($result);
            echo("<tr>
                <td>$n</td>
                <td>$table[0]</td>
                <td>$table[1]</td>
                <td>$table[2]</td>
            </tr>");
        }
        ?>
        </table>
            <?php
            echo('<div><button style="font-family: comfortaa; font-weight: 300;" onclick=(location.href="previousrecord.php")><</button><button style="font-family: comfortaa; font-weight: 300;" onclick=(location.href="startrecord.php")>В начало таблицы</button><button style="font-family: comfortaa; font-weight: 300;" onclick=(location.href="nextrecord.php")>></button></div>')
            ?>
        </div>
    </div>
</body>