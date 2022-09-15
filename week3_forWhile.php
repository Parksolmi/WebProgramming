<?php
    //1부터 100까지 3의 배수가 아닌 수들과 그 합 구하기
    $i = 1;
    $count = 0;
    $hap = 0;

    while ($i<=100) {
        if ($i%3 != 0) {
            echo "$i\t";
            $count++;
            $hap += $i;
        }
        if ($count%10 == 0) {
            echo "<br>";
        }
        $i++;
    }
    echo "<br><br>";
    echo "1부터 100까지 3의 배수가 아닌 정수의 합 : $hap";

    
?>