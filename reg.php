<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <title>SpeedyTyper - игра про набор слов</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
    <style>
        .thx
        {
            margin:0px;
            padding:0px;
            width:600px;
            height:500px;
            border:solid;
            border-color:dimgray;
            text-align:center;
            background-color:silver;
            background-image: linear-gradient(white, silver, #9d9c9c,#939393);
            position:absolute;
            top:50%; left:50%;
            margin: -250px 0 0 -300px;
            font-family: comfortaa;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div class="thx">
        <p>Здравствуйте, <?php echo $_POST['login'];?></p>
        <p>Благодарим Вас за регистрацию на нашем сайте!</p>
        <p>Ваш пароль (запишите куда-нибудь, наш сайт на данный момент не имеет функции восстановления пароля): <?php echo $_POST['password'];?></p>
        <?php 
                echo("Ваш аватар: ");
                move_uploaded_file($_FILES['avatar']['tmp_name'],$_FILES['avatar']['name']);
                echo "<img src=".$_FILES['avatar']['name']." height='200px' width='200px'>";
        ?>
        </br>
        <button class="regbut" type="button" onclick="location.href='http://project/index.php'">Вернуться в начало</button>
    </div>
</body>
</html>