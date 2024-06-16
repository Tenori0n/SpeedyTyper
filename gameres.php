<?php
    session_start();
    $name = $_SESSION['Username'];
    switch ($_POST['dif'])
    {
        case 1:
            $difficulty = "Easy";
            break;
        case 10:
            $difficulty = "Normal";
            break;
        case 100:
            $difficulty = "Hard";
            break;
    }
    $score = $_POST['score'];
    $_SESSION['lastgame'] = $score;
    $query = "INSERT INTO \"SiteBD\".\"Results\" VALUES ((SELECT MAX (\"SiteBD\".\"Results\".\"ResultID\")+1 FROM \"SiteBD\".\"Results\"), (SELECT \"SiteBD\".\"Users\".\"ID\" FROM \"SiteBD\".\"Users\" WHERE \"SiteBD\".\"Users\".\"Username\" = '$name'), '$difficulty', '$score')";
    pg_query(pg_connect("host=localhost port=5434 dbname=SpeedyTyper user=postgres password=goaway"), $query);
    header("Location:index.php");
    die();
?>
