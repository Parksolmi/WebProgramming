<?php
    echo "-----------------------<br>";
    echo "제곱미터 &nbsp 평<br>";
    echo "-----------------------<br>";

    for ($square_m=10; $square_m<=200; $square_m+=10){
        $pyeong = $square_m * 0.3025;
        echo "$square_m 
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
            $pyeong <br>";
    }
    echo "-----------------------<br>";

?>