<?php 

    //php오류 메세지
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //큰따옴표와 작은따옴표
    $name = "홍길동";
    echo "$name 님 반갑습니다!";
    echo "<br>";

    $name = '홍길동';
    echo '$name 님 반갑습니다!';
    echo "<br>";

    //변수명에 중괄호 사용하기
    $name = "김철수";
    echo "$name님 반갑습니다!";
    echo "<br>";

    $name = "김철수";
    echo "{$name}님 반갑습니다!";
    echo "<br>";

    $name = "김철수";
    echo '{$name}님 반갑습니다!';
    echo "<br>";

    //echo "<img src = "cat.jpg" >";
    echo "<img src = 'cat.jpg' >";
    echo "<img src = \"cat.jpg\" >";
?>