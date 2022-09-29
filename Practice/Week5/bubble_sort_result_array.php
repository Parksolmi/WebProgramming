<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <?php
        $count = count($_POST["num"]);
        $num = $_POST["num"];

        echo "정렬 전 : ";
        for ($a = 0; $a < 10; $a++) {
            echo $num[$a];
            if($a != $count-1) {
                echo ", ";
            }
        }
        echo "<br>";

        for($i = $count-2; $i>=0; $i--) {
            for($j = 0; $j <= $i; $j++) {
                if($num[$j] > $num[$j+1]) {
                    $tmp = $num[$j];
                    $num[$j] = $num[$j+1];
                    $num[$j+1] = $tmp;
                }
            }
        }
        echo "버블 정렬(오름차순) 후 : ";
        for ($a = 0; $a < 10; $a++) {
            echo $num[$a]." ";
        }

    ?>
    </body>

</html>