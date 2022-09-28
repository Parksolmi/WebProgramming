<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            if ($num1 <= $num2) {
                $min = $num1;
                $max = $num2;
            } else {
                $min = $num2;
                $max = $num1;
            }

            for ($i = $min; $i <= $max; $i++)
            {
                echo "$i<br>";
            }
        ?>
    </body>
</html>