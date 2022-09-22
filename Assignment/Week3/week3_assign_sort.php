<?php
    //오름차순 정렬
    $a = 9;
    $b = 6;
    $c = 2;

    $min1 = 1;
    $min2 = 1;
    $min3 = 1;

    echo "입력된 세 정수 : $a $b $c <br>";

    if($a < $b) {
        if ($a < $c) {  
            $min1 = $a;
            if($b< $c){
                $min2 = $b;
                $min3 = $c;
            }else {
                $min2 = $c;
                $min3 = $b;
            }
        } else {
            $min1 = $c;
            $min2 = $a;
            $min3 = $b;
        }
    }else {
        if ($b < $c){
            if ($a < $c){
                $min1 = $b;
                $min2 = $a;
                $min3 = $c;
            } else {
                $min1 = $b;
                $min2 = $c;
                $min3 = $a;
            }
        }else {
            $min1 = $c;
            $min2 = $b;
            $min3 = $a;
        }
    }

    echo "입력된 정수를 오름차순으로 정렬 : $min1 $min2 $min3";

?>