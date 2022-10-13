<?php
    session_start();
    $_SESSION["userid"] = "ocella";
    $_SESSION["username"] = "박영준";

    $userid = $_SESSION["userid"];
    $username = $_SESSION["username"];

    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
?>

<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <ul>
            <li>userid 세션(지역변수) : <?=$userid?></li>
            <li>username 세션(지역변수) : <?=$username?></li>
            <li>userid 세션(전역변수) : <?=$_SESSION["userid"]?></li>
            <li>username 세션(전역변수) : <?=$_SESSION["username"]?></li>
            <li>username세션이 삭제되었습니다!</li>
        </ul>
    </body>
</html>