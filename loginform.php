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
