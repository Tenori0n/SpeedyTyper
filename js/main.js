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