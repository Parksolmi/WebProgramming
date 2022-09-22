<?php
    //1부터 100까지 3의 배수가 아닌 수들과 그 합 구하기
    $i = 1;
    $count = 0;
    $hap = 0;

    while ($i<=100) {
        if ($i%3 != 0) {
            echo "$i\t";
            $count++;
            $hap += $i;
        }
        if ($count%10 == 0) {
            echo "<br>";
        }
        $i++;
    }
    echo "<br><br>";
    echo "1부터 100까지 3의 배수가 아닌 정수의 합 : $hap";

    echo "<br><br>";
    echo "--------------------------------------------";
    echo "<br><br>";

    //인치를 센티미터로 변환하기
    $inch = 10;
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th width='100'>인치</th><th width='100'>센티미터</th>";
    echo "</tr>";
    while($inch <= 100)
    {
        $cm = $inch * 2.54;
        echo "<tr align='center'>
                <td>$inch</td>
                <td>$cm</td>
              </tr>";

        $inch = $inch + 10;
    }
    echo "</table>";
?>