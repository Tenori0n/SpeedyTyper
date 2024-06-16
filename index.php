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
        include "alertmessage.php";
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