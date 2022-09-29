<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>

        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $besu = $_POST["besu"];

            $count = 0;
            $ok = true;

            if($num2 < $num1){
                $temp = $num2;
                $num2 = $num1;
                $num1 = $temp;
            }

            for ($i = $num1; $i <= $num2; $i++) {
                if($i % $besu != 0) {
                    echo $i." ";
                    $count++;
                    $ok = true;
                }
                if($count != 0 && $count % 10 == 0 && $ok == true) {
                    echo "<br>";
                    $ok = false;
                }

            }
        ?>

    </body>
</html>