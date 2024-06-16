<?php
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
