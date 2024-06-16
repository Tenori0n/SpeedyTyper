function hidereg(){
    document.getElementById("loginn").style.display="none";
    document.getElementById("regist").style.display="none";
    document.getElementById("h4").style.display="none";
}
function regvis()
{
    document.getElementById("h4").style.display="flex";
}
function loginnvis()
{
    document.getElementById("loginn").style.display="block";
}
function loginhid()
{
    document.getElementById("loginn").style.display="none";
}
function registvis()
{
    document.getElementById("regist").style.display="block";
}
function entering(){
    var btn = document.getElementById("loginbut");
    var username = document.getElementById("username");
    var userpassword = document.getElementById("userpassword");
    btn.disabled = true;
    document.getElementById("h4").addEventListener('input', function (event){
        if (username.validity.valid == true && userpassword.validity.valid == true)
            btn.disabled = false;
        else
            btn.disabled = true;})
}
function registering(){
    var btn = document.getElementById("regbutt");
    var username = document.getElementById("username1");
    var userpassword1 = document.getElementById("userpassword1");
    var userpassword2 = document.getElementById("userpassword2");
    btn.disabled = true;
    document.getElementById("h4").addEventListener('input', function (event){
        if (username.validity.valid == true && userpassword1.validity.valid == true && userpassword2.validity.valid == true && (userpassword1.value ==userpassword2.value))
            btn.disabled = false;
        else
            btn.disabled = true;})
}
function welcoming()
{
    document.getElementById("reg").style.display="none";
    document.getElementById("welcoming").style.display="block";
    document.getElementById("welcoming").innerHTML='<span>Здравствуйте, '+document.getElementById("username").value+'!</br></span><button class="reg2but" onclick="notwelcoming()">Выйти</button>';
}
function notwelcoming()
{
    document.getElementById("welcoming").innerHTML="<span></span>";
    document.getElementById("welcoming").style.display="none";
    document.getElementById("reg").style.display="flex";
}



function game1(text1, text2, text3)
{
    var flag;
    function getkey(e, lastKey, num, text)
    {
        var temp;
        var result = document.getElementById("game");
        switch (e.code)
        {
            case 'KeyA':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ф';
                else
                    temp = 'ф';
                break;
            case 'KeyB':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'И';
                else
                    temp = 'и';
                break;
            case 'KeyC':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'С';
                else
                    temp = 'с';
                break;
            case 'KeyD':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'В';
                else
                    temp = 'в';
                break;
            case 'KeyE':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'У';
                else
                    temp = 'у';
                break;
            case 'KeyF':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'А';
                else
                    temp = 'а';
                break;
            case 'KeyG':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'П';
                else
                    temp = 'п';
                break;
            case 'KeyH':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Р';
                else
                    temp = 'р';
                break;
            case 'KeyI':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ш';
                else
                    temp = 'ш';
                break;
            case 'KeyJ':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'О';
                else
                    temp = 'о';
                break;
            case 'KeyK':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Л';
                else
                    temp = 'л';
                break;
            case 'KeyL':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Д';
                else
                    temp = 'д';
                break;
            case 'KeyM':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ь';
                else
                    temp = 'ь';
                break;
            case 'KeyN':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Т';
                else
                    temp = 'т';
                break;
            case 'KeyO':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Щ';
                else
                    temp = 'щ';
                break;
            case 'KeyP':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'З';
                else
                    temp = 'з';
                break;
            case 'KeyQ':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Й';
                else
                    temp = 'й';
                break;
            case 'KeyR':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'К';
                else
                    temp = 'к';
                break;
            case 'KeyS':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ы';
                else
                    temp = 'ы';
                break;
            case 'KeyT':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Е';
                else
                    temp = 'е';
                break;
            case 'KeyU':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Г';
                else
                    temp = 'г';
                break;
            case 'KeyV':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'М';
                else
                    temp = 'м';
                break;
            case 'KeyW':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ц';
                else
                    temp = 'ц';
                break;
            case 'KeyX':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ч';
                else
                    temp = 'ч';
                break;
            case 'KeyY':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Н';
                else
                    temp = 'н';
                break;
            case 'KeyZ':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Я';
                else
                    temp = 'я';
                break;
            case 'BracketLeft':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Х';
                else
                    temp = 'х';
                break;
            case 'BracketRight':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ъ';
                else
                    temp = 'ъ';
                break;
            case 'Semicolon':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ж';
                else
                    temp = 'ж';
                break;
            case 'Quote':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Э';
                else
                    temp = 'э';
                break;
            case 'Comma':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Б';
                else
                    temp = 'б';
                break;
            case 'Period':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ю';
                else
                    temp = 'ю';
                break;
            case 'Digit1':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '!';
                else
                    temp = '1';
                break;
            case 'Digit2':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '"';
                else
                    temp = '2';
                break;
            case 'Digit3':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '№';
                else
                    temp = '3';
                break;
            case 'Digit4':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = ';';
                else
                    temp = '4';
                break;
            case 'Digit5':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '%';
                else
                    temp = '5';
                break;
            case 'Digit6':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = ':';
                else
                    temp = '6';
                break;
            case 'Digit7':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '?';
                else
                    temp = '7';
                break;
            case 'Digit8':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '*';
                else
                    temp = '8';
                break;
            case 'Digit9':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '(';
                else
                    temp = '9';
                break;
            case 'Digit0':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = ')';
                else
                    temp = '0';
                break;
            case 'Minus':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '_';
                else
                    temp = '-';
                break;
            case 'Equal':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = '+';
                else
                    temp = '=';
                break;
            case 'Slash':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = ',';
                else
                    temp = '.';
                break;
            case 'Backquote':
                if (lastKey == "ShiftLeft" || lastKey == "ShiftRight")
                    temp = 'Ё';
                else
                    temp = 'ё';
                break;
            case 'Space':
                temp = ' ';
                break;
            case 'ShiftLeft':
                temp = 'ShiftLeft';
                break;
            case 'ShiftRight':
                temp = 'ShiftRight';
                break;
            case 'Backspace':
                temp = 'Backspace';
                e.preventDefault()
                break;
            default:
                temp = '';
                break;
        }
        if (!flag && temp!="ShiftRight" && temp!="ShiftLeft") {
            if (temp == 'Backspace') {
                let child = result.lastElementChild;
                if (child)
                    result.removeChild(child);
            }
            else
            if (text[num] == temp)
                if (temp == " ")
                    result.innerHTML += '<span class="right-letter">' + '&nbsp;' + '</span>';
                else
                    result.innerHTML += '<span class="right-letter">' + temp + '</span>';
            else
            if (temp == " ")
                result.innerHTML += '<span class="wrong-letter">' + '&nbsp;' + '</span>';
            else
                result.innerHTML += '<span class="wrong-letter">' + temp + '</span>';
        }
        return temp;
    }
    function presskey(e)
    {
        letter = getkey(e, temp, letnum, text);
        if (letter != "" && letter != "ShiftRight" && letter != "ShiftLeft") {
            if (letter == "Backspace")
            {
                letnum-=2;
                score-=dif;
            }
            else
            if (text[letnum] == letter) {
                score+=dif;
            } else {
               wrong++;
               score+=dif;
            }
            document.getElementById("tekst").textContent = "Счет: " + (score-(dif*wrong)) + " Ошибки: " + wrong;
            letnum++;
        }
        temp = letter;
    }
    function stopgame()
    {
        removeEventListener("keydown", presskey)
        flag = true;
        document.getElementById("score").value = (score-(dif*wrong));
        document.getElementById("gameform").submit();
        document.getElementById("tekst").textContent = "Счет: " + (score-(dif*wrong)) + " Ошибки: " + wrong + " ИГРА ОКОНЧЕНА, ДАННЫЕ ОТПРАВЛЯЮТСЯ НА СЕРВЕР";
    }
    document.getElementById("StartGame").style.display = "none";
    document.getElementById("difficulty").style.display = "none";
    document.getElementById("tekst").textContent = "Счет: " + 0 + " Ошибки: " + 0;
    setTimeout(stopgame, 60000);
    document.getElementById("StartGame").blur();
    document.getElementById("game").innerHTML = "";
    var score = 0;
    flag = false;
    var temp = 'Й';
    var wrong = 0;
    var select = document.getElementById("difficulty");
    var dif = Number(select.value);
    var letter;
    var text;
    var letnum=0;
    switch (Number(select.value))
    {
        case 1:
            dif = 1;
            text = text1;
            document.getElementById("task").innerHTML = '<span>' + text + '</span>';
            break;
        case 10:
            dif = 10;
            text = text2;
            document.getElementById("task").innerHTML = '<span>' + text + '</span>';
            break;
        case 100:
            dif = 100;
            text = text3
            document.getElementById("task").innerHTML = '<span>' + text + '</span>';
            break;
    }
    addEventListener("keydown", presskey);
}