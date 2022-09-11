<?php

    //php오류 메세지
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //산술연산자
    $a = 3;
    $b = 5;

    $c = $a + $b;
    $c++;

    $c = $c + $a;
    $d = $a + $c * $b;

    echo "\$d : $d";
    echo "<br>";

    $a = 10;
    $b = $a % 3;
    $b--;

    $c = $a - $b;
    $c = $c - 5;

    echo "\$c : $c";

    echo "<br><br>";

    //문자열 연결 연산자
    $num1 = "010";
    $num2 = "1234";
    $num3 = "5678";
    $phone_number = $num1."-".$num2."-".$num3;
    echo "휴대폰 번호 : $phone_number"."<br>";

    $email1 = "admin";
    $email2 = "codingschool.info";
    $email = $email1."@".$email2;
    echo "이메일 주소 : $email";

    echo "<br><br>";

    //대입 연산자
    $a = 5;
    echo $a."<br>";

    $a += 3;
    echo $a."<br>";

    $a -= 4;
    echo $a."<br>";

    $a *= 2;
    echo $a."<br>";

    $a /= 4;
    echo $a."<br>";

    $a %= 2;
    echo $a."<br>";

    $a = "딸기";
    $a .= "주스";
    echo $a."<br>";
?>