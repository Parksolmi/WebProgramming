<?php
    $score = 59;
    echo "시험 점수 : {$score}점<br>";

    if($score>=90 && $score<=100) {
        echo "등급 : 수";
    } elseif ($score>=80) {
        echo "등급 : 우";
    } elseif ($score>=70) {
        echo "등급 : 미";
    } elseif ($score>=60) {
        echo "등급 : 양";
    } elseif ($score>=0) {
        echo "등급 : 가";
    } else {
        echo "점수를 잘못 입력하셨습니다!";
    }
?>