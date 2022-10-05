<?php
    
    $sum = 0;

    for($i=100; $i<=900; $i++) {
        if($i%3 != 0 ) {
            $sum += $i;
            echo "{$i}까지의 합 : $sum<br>";
        }
    }
?>