<html>
    <head>
    <meta charset='utf-8'>
    </head>

    <body>
        <style type="text/css">
            table, td{
                border: solid 1px black;
                width: "100";
            }
        </style>
        <table>
            <?php
                $a = $_POST['a'];

                echo "<h3> $a 단 구구단 표 만들기</h3>";

                $b = 1;
                while($b<=9) {
                    $c = $a * $b;
                    echo"<tr><td align='center'>$a x $b = $c </td></tr>";
                    $b++;
                }
            ?>
        </table>
    </body>
</html>