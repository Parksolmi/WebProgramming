<?php
    $num = 300;
    $sum = 0;

    while($num<=3000) {
        if($num%2 != 0) {
            $sum += $num;
        }
        $num++;
    }
    
    echo "300~3000 중 홀수의 합 : $sum";
?>