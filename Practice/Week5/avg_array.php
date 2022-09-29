<!-- 예제 5-1과 5-2 : 과목 평균 구하기-->
<?php
    $score[0] = 90;
    $score[1] = 80;
    $score[2] = 85;
    $score[3] = 95;
    $score[4] = 93;

    $sum1 = 0;
    for($a = 0; $a<=4; $a++){
        $sum = $sum + $score[$a];
    }
    $avg1 = $sum/5;
    echo "과목 점수 : $score[0], $score[1], $score[2], $score[3], $score[4]<br>";
    echo "합계 : $sum, 평균 : $avg<br>";

    echo "<br><br>";
    $scores = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63,
            74, 84, 93, 89, 63, 99, 81, 70, 80, 95);
    $sum2 = 0;
    for($a = 0; $a < 20; $a++) {
        $sum2 = $sum2 + $scores[$a];
    }
    $avg2 = $sum2/20;
    echo "합계 : $sum2, 평균 : $avg2";

?> 