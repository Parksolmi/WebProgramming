<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <?php
            for($i=1; $i<=10; $i++) {
                for($blank=9; $blank>=$i; $blank--) {
                    echo "&nbsp&nbsp";
                }
                for($star=1; $star<=$i; $star++ ) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>

    </body>
</html>