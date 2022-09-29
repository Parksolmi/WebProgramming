<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <style>
            table{
                border-collapse: collapse;
                width: 600px;
            }
            td{
                border: solid 1px grey;
                text-align: center;
                padding: 5px;
            }
        </style>

        <h3>- 구구단 표</h3>

        <table>
            <?php
                for($a = 2; $a <= 9; $a++) {
                    echo "<tr>";
                    echo "<td>{$a}단</td>";

                    for($b = 1; $b <= 9; $b++) {
                        $c = $a * $b;

                        echo "<td>{$a}X{$b}=$c</td>";
                    }
                    echo "</tr>";
                
                }
            ?>
        </table>
    </body>
</html>