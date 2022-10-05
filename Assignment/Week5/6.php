<?php
    $count = 0;

    for ($i=1; $i<=500; $i++){
        
        if($i%5 == 0) {
            echo "$i ";
            $count++;

            if($count%10 == 0) {
                echo "<br>";
            }
        }
    }
?>