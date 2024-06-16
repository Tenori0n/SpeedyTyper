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
        <?php
        include "header.php";
        if (isset($_SESSION['message']))
        {
            echo('<div id="logoutmessage" style="width: 100%; height: 30px; display: flex; justify-content: center;">');
            echo("<p class='mainfont' style='color: red'>".$_SESSION['message']."</p>");
            unset($_SESSION['message']);
            echo('<script>setTimeout(function(){document.getElementById("logoutmessage").remove()}, 3000);</script>');
            echo('</div>');
        }
        include "loginform.php";
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case "game":
                    include "gamepage.php";
                    break;
                case "record":
                    include "records.php";
                    break;
            }
        }
        else
            include "gamepage.php";
        include "footer.php";
        ?>
</body>
</html>