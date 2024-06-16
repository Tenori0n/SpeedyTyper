<?php
if (isset($_SESSION['message']))
{
    echo('<div id="logoutmessage" style="width: 100%; height: 30px; display: flex; justify-content: center;">');
    echo("<p class='mainfont' style='color: red'>".$_SESSION['message']."</p>");
    unset($_SESSION['message']);
    echo('<script>setTimeout(function(){document.getElementById("logoutmessage").remove()}, 3000);</script>');
    echo('</div>');
}