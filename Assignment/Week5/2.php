<?php
    $count = 0;
    for($i=100; $i<=500; $i++){

        if($i%2 == 0){
            echo "$i ";
            $count++;

            if($count%2 == 0){
                echo "<br>";
             }
         }
    }
?>