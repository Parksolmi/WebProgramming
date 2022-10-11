<?php
    // error_reporting( E_ALL );
    // ini_set( "display_errors", 1 );

    $score = array(array(88, 98, 96, 77, 63),
            array(86, 77, 66, 86, 93),
            array(74, 83, 95, 86, 97),
            );

    //배열에 저장된 점수 출력
    for ($i = 0; $i < 3; $i++) {
        for ($j=0; $j<5; $j++) {
            echo "\$score[$i][$j] = ".$score[$i][$j]."<br>";
        }
        echo "<br>";
    }

    //학생 3명의 성적 합계와 평균 출력
    for ($i = 0; $i<3; $i++){
        $sum = 0;

        for($j = 0; $j < 5; $j++) {
            $sum += $score[$i][$j];
        }

        $avg = $sum / 5;
        $student_num = $i + 1;
        echo "$student_num 번 학생의 점수 => 합계 : $sum, 
            평균 : $avg <br>";
    }
?>