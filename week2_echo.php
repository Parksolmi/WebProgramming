<?php 
    //php오류 메세지
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<!--echo문에서 문자열과 html태그 출력하기-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
    </head>
    <body>
        <h3>
            <?php
                echo "고양이와 토끼";
            ?>
        </h3>
            <?php
                $filename = "cat.jpg";
                echo "<img src='$filename'>";
                echo "<br>";

                $filename = "rabit.jpg";
                echo "<img src='$filename'>";
            ?>
    </body>
</html>


<!--큰따옴표와 작은따옴표-->
<?php
    echo "<br><br>";

    $name = "홍길동";
    echo $name;
    echo "님 반갑습니다!";
    echo "<br>";

    $name = '홍길동';
    echo $name;
    echo '님 반갑습니다!';

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


<!--echo문 약식으로 표기 -->
<?php
    echo "<br><br>";
    
    $id = "rubato";
    $name = '루바토';
?>
<h3>회원정보</h3>
<!-- <p>- 아이디 : <?php echo $id?></p> -->
<p>- 아이디 : <?=$id?></p>
<!-- <p>- 이름 : <?php echo $name?> -->
<p>- 이름 : <?=$name?></p>