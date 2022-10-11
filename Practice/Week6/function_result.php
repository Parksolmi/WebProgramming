<?php
    
    //예제 6-2
    function plus1($a, $b) {
        $c = $a + $b;
        echo "[예제 6-2] ".$a."+".$b."=".$c."<br>";
    }

    $num1 = $_POST["num1-1"];
    $num2 = $_POST["num1-2"];

    plus1($num1, $num2);
    echo "<br>";
    

    //예제 6-3
    function plus2($a, $b) {
        $c = $a + $b;
        return $c;
    }

    $num1 = $_POST["num2-1"];
    $num2 = $_POST["num2-2"];

    $result = plus2($num1, $num2);
    echo "[예제 6-3] ".$num1."+".$num2."=".$result."<br>";
    echo "<br>";

    //예제 6-4
    echo "[예제 6-4] ";
    function sum($a, $b) {
        while ($a <= $b) {
            $sum += $a;
            $a++;
        }
        return $sum;
    }

    $from = $_POST["from"];
    $to = $_POST["to"];

    $sum = sum($from, $to);
    echo $from."부터 ".$to."까지 숫자들의 합 : ".$sum."<br>";
    echo "<br>";

    //예제 6-5
    echo "[예제 6-5]<br>";
    function man_age($t_year, $t_month, $t_day, $b_year, $b_month, $b_day) {
        
        if($b_month < $t_month) {
            $age = $t_year - $b_year;
        }
        elseif ($b_month == $t_month) {
            if($b_day <= $t_day){
                $age = $t_year - $b_year;
            }
            else {
                $age = $t_year - $b_year - 1;
            }
        }else {
            $age = $t_year - $b_year - 1;
        }

        return $age;
    }

    $t_year = $_POST["t_year"];
    $t_month = $_POST["t_month"];
    $t_day = $_POST["t_day"];

    $b_year = $_POST["b_year"];
    $b_month = $_POST["b_month"];
    $b_day = $_POST["b_day"];

    $my_age = man_age($t_year, $t_month, $t_day, $b_year, $b_month, $b_day);
    echo "오늘 날짜 : ".$t_year."년".$t_month."월".$t_day."일<br>";
    echo "태어난 날짜 : ".$b_year."년".$b_month."월".$b_day."일<br>";
    echo "만 나이 : ".$my_age."<br>";
    echo "<br>";

    //예제 6-6
    echo "[예제 6-6]<br>";

    //일반 입장권 요금
    function cal_fee1($day, $age) {
        if($day == "주간") {
            //대인
            if ($age > 12 && $age <65) {
                $money = 26000;
            }
            //소인
            else {
                $money = 19000;
            }
        }
        else {
            //대인
            if ($age > 12 && $age <65) {
                $money = 21000;
            }
            //소인
            else {
                $money = 16000;
            }
        }

        return $money;
    }

    //자유 이용권 요금
    function cal_fee2($day, $age) {
        if($day == "주간") {
            //대인
            if ($age > 12 && $age <65) {
                $money = 33000;
            }
            //소인
            else {
                $money = 24000;
            }
        }
        else {
            //대인
            if ($age > 12 && $age <65) {
                $money = 28000;
            }
            //소인
            else {
                $money = 21000;
            }
        }

        return $money;
    }

    //2일 자유 이용권 요금
    function cal_fee3 ($age) {
        //대인
        if($age > 12 && $age <65) {
            $money = 55000;
        }
        //소인
        else {
            $money = 40000;
        }

        return $money;
    }

    //콤비권 요금
    function cal_fee4 ($age) {
        //대인
        if($age > 12 && $age <65) {
            $money = 54000;
        }
        //소인
        else {
            $money = 40000;
        }

        return $money;
    }

    $category = $_POST["category"];
    $day = $_POST["day"];
    $age = $_POST["age"];

    if($category == "일반 입장권") {
        $fee = cal_fee1($day, $age);
    } elseif($category == "자유 이용권") {
        $fee = cal_fee2($day, $age);
    } elseif($category == "2일 자유 이용권") {
        $day = "";
        $fee = cal_fee3($age);
    } else { 
        $day = "";
        $fee = cal_fee4($age);
    }

    echo "- 구분 : ".$category."<br>";
    echo "- 주야간 : ".$day."<br>";
    echo "- 나이 : ".$age."세 <br>";
    echo ">>> 입장료 : ".$fee."<br>";

?>