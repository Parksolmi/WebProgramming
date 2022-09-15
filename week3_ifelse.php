<?php
    //배수 판별하기 03/besu.php
    $num = 32;
    $result = "3의 배수도 5의 배수도 아니다.";

    if($num%3 == 0) {
        $result = "3의 배수이다.";
    }

    if($num%5 == 0) {
        $result = "5의 배수이다.";
    }

    if($num%3 == 0 && $num%5 == 0) {
        $result = "3의 배수이면서 5의 배수 이다.";
    }
    echo "$num : $result";

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //회원레벨 03/is_login.php
    $level = 4;
    echo "회원 레벨 : $level<br>";

    if($level>=1 and $level<=7)
    {
        echo "로그인 가능합니다!";
    }
    else {
        echo "로그인이 가능하지 않습니다.";
    }

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //수업 중 테스트
    //수업 중 테스트
    $test1 = 85;
    $test2 = 95;

    echo "실기점수는 $test1 점 이고, 필기점수는 $test2 점 입니다.<br><br>";

    if ($test1 >= 70 && $test2 >= 80) {
        echo "합격입니다!";
    }
    else {
        echo "불합격입니다.";
    }

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //놀이공원 입장료 계산
    $age = 68;
    $welfare = "no";
    $gukga = "yes";
    $after17 = "yes";

    $price = "1";
    
    if($age < 3){
        $price = "무료";
    }
    elseif ($age<=13 || $after17=="yes"){
        $price = "4,000원";
    }
    elseif($age<=18 || $age>=70 || $welfare =="yes" || $gukga=="yes") {
        $price = "8,000원";
    }
    else {
        $price = "10,000원";
    }

    echo "복지 카드 소지 : $welfare<br>";
    echo "국가유공자증 소지 : $gukga<br>";
    echo "17시 이후 입장객 : $after17<br>";
    echo "나이 : $age 세<br><br>"; 
    echo "입장료 : $price";

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //오름차순 정렬
    $a = 9;
    $b = 6;
    $c = 2;

    $min1 = 1;
    $min2 = 1;
    $min3 = 1;

    echo "입력된 세 정수 : $a $b $c <br>";

    if($a < $b) {
        if ($a < $c) {  
            $min1 = $a;
            if($b< $c){
                $min2 = $b;
                $min3 = $c;
            }else {
                $min2 = $c;
                $min3 = $b;
            }
        } else {
            $min1 = $c;
            $min2 = $a;
            $min3 = $b;
        }
    }else {
        if ($b < $c){
            if ($a < $c){
                $min1 = $b;
                $min2 = $a;
                $min3 = $c;
            } else {
                $min1 = $b;
                $min2 = $c;
                $min3 = $a;
            }
        }else {
            $min1 = $c;
            $min2 = $b;
            $min3 = $a;
        }
    }

    echo "입력된 정수를 오름차순으로 정렬 : $min1 $min2 $min3";

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //만나이 계산하기
    $birth_year = 1990;
    $birth_month = 3;
    $birth_day = 30;

    $today_year = 2022;
    $today_month = 9;
    $today_day = 15;

    $man_age = 0;

    echo "오늘 날짜 : $today_year 년 $today_month 월 $today_day 일 <br>";
    echo "출생 연월일 : $birth_year 년 $birth_month 월 $birth_day 일 <br>";

    if ($birth_month >= 1 || $birth_month <= 2) {
        $man_age = $today_year - $birth_year;
    } elseif ($birth_month == 3) {
        if ($birth_day>=1 || $birth_day<=10) {
            $man_age = $today_year - $birth_year;
        } else {
            $man_age = $today_year - $birth_year -1;
        }
    } else {
        $man_age = $today_year - $birth_year -1;
    }

    echo "만 나이 : $man_age 세";
    
?>