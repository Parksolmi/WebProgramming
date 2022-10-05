<?php
    
    for($i=1; $i<=10; $i++) {

        $fac = 1;
        for($j=1; $j<=$i; $j++){
            $fac *= $j;
        }
        echo "$i ! = $fac <br>";
        
    }

?>