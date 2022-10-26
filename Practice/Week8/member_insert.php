<?php
 //php오류 메세지
 error_reporting(E_ALL);
 ini_set('display_errors', '1');

    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");

    // echo "$id<br>";
    // echo "$pass<br>";
    // echo "$name<br>";
    // echo "$email<br>";
    // echo "$regist_day<br>";

    $con = mysqli_connect("localhost", "user1", "12345", "test");

    $sql = "insert into members(id, pass, name, email, regist_day, level, point)";
    $sql .= "values ('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "회원가입 완료";
?>